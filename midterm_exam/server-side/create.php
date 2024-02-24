<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "foods");
    if(isset($_POST['data'])) {
        $data = json_decode($_POST['data']);
        $strSql = "INSERT INTO food(name, type, price, ingredients, description) 
                VALUES(
                    '" . $data->name . "', 
                    '" . $data->type . "', 
                    '" . $data->price . "',
                    '" . $data->ingredients . "', 
                    '" . $data->description . "')";
        
        if(mysqli_query($con, $strSql))
            echo json_encode(["data" => "Success"]);
        else
            echo json_encode(["data" => "Failed"]);
    }
    mysqli_close($con);
?>