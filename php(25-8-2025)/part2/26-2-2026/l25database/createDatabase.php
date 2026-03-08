<?php
echo "Create Database";

// (i) MySQLi Procedural

// $conn = mysqli_connect("localhost","root","","phpone", 3307);
// if (mysqli_connect_errno()) {
//     echo "Connection Failed" . mysqli_connect_errno();
//     exit();
// } else {
//     echo "Connected Successfully!";
// };

// $stmt = "CREATE DATABASE IF NOT EXISTS dphpdbone";
// if(mysqli_query($conn,$stmt)) {
//     echo "DataBase Created Successfully";
// } else {
//     echo "Error Found";
// }

// mysqli_close($conn);

// (ii) MySQLi 
// (iii) PDO
$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$port = 3307;


try {
    $conn = new PDO(
        "mysql:host=$dbhost;port=$port",
        $dbusername,
        $dbpassword
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!<br>";

    $stmt = "CREATE DATABASE IF NOT EXISTS dbtwo";
    $conn->exec($stmt);

    echo "Database created successfully!";

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}




?>