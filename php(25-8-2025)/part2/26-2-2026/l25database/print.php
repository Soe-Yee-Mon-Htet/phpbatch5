<?php

// (i) MySQLi Procedural
// DB Connect
// mysqli_connect(host,dbusername, dbpassword, dbname);

// $conn = mysqli_connect("localhost","root","","phpone")

// (ii) MySQLi Object-Oriented
    // $conn = new mysqli(host,dbusername, dbpassword);
    // $conn = new mysqli("localhost","root","","phpone");
    // if(!$conn){
    //     echo "Connection Failed" . mysqli_connect_error();
    //     exit();
    // } else{
    //     "Connected Successfully!";
    // }


// (iii) PDO (PHP Data Objects)
// new PDO("mysql: host = host; dbname = dbname","dbusername","dbpassword")
// $conn = new PDO("mysql: host = localhost; dbname = phpone","root","");
// $conn->setArrtibute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

// Method 1
// $dbhost = "localhost";
// $dbname = "phpone";
// $dbusername = "root";
// $dbpassword = "";

// $conn = new PDO("mysql: host = $dbhost; dbname = $dbname",$dbusername,$dbpassword);
// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// Method 2
// Set DSN = Data Source name
// $options = [PDO::ATTR_PERSISTENT=> true, PDO::ATTR_ERRMODE=>ERRORMODE_EXCEPTION];
// $conn = new PDO("mysql: host = $dbhost ; dbname = $dbname",$dbusername, $dbpassword, $options);



// MySQLi Procedural

// $conn = new mysqli("localhost","root","","phpone",3307);
// $conn = mysqli_connect("localhost","root","","phpone",3307);

// if($conn->connect_error){
//     echo "Failed". $conn->connect_error;
//     exit();
// } else {
//     echo "Connected Successfully!";
// }

// PDO (PHP DATA Object)

$dbhost = "127.0.0.1";
$dbname = "phpone";
$dbusername = "root";
$dbpassword = "";

// try {
//     $conn = new PDO(
//         dsn: "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4",
//         username: $dbusername,
//         password: $dbpassword
//     );
//     $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

//     echo "Connected Successfully!";
// } catch (PDOException $e) {
//     die("Connection Failed: " . $e->getMessage());
// }

$conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "Connection Failed" . mysqli_connect_error();
    die();
} else {
    echo "Connected Successfully";
}

?>