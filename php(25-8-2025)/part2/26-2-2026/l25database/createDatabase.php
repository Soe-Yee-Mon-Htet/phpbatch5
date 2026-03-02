<?php
    echo "Create Database";

    //MySQLi Procedural

    $conn = mysqli_connect("localhost","root","","phpone", 3307);
    if (mysqli_connect_errno()) {
        echo "Connection Failed" . mysqli_connect_errno();
        exit();
    } else {
        echo "Connected Successfully!";
    };

    $stmt = "CREATE DATABASE IF NOT EXISTS phpdbone";
    if(mysqli_query($conn,$stmt)) {
        echo "DataBase Created Successfully";
    } else {
        echo "Error Found";
    }

    mysqli_close($conn);


?>