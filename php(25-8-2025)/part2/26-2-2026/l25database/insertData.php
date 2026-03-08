<?php
echo "Create Table !";

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$port = 3307;
$dbname = "dbtwo";

try {
    $conn = new PDO(
        "mysql:host=$dbhost;port=$port;dbname=$dbname",
        $dbusername,
        $dbpassword
        
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!<br>";

    $stmt = "INSERT INTO students(firstName, lastName, city) VALUES ('aung','kyaw','Yangon'),('su','su','Mandalay')";
    $stmt .= "INSERT INTO students(firstName, lastName, city) VALUES ('aye','kyaw','Yangon'),('wine','su','Mandalay')";
    $stmt .= "INSERT INTO students(firstName, lastName, city) VALUES ('mg','kyaw','Yangon'),('soe','soe','Mandalay')";

    $conn->exec($stmt);

    echo "TABLE created successfully!";

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}

?>