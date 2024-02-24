<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "foods");
    $result = mysqli_query($con, "SELECT * FROM food");
    $heroes = [];
    while($record = mysqli_fetch_assoc($result))
        $food[] = $record;

    echo json_encode($food);

    mysqli_close($con);
?>