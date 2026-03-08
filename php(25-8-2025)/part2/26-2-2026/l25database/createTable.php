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

    $stmt = "CREATE Table IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(200) NOT NULL,
        lastName VARCHAR(200) NOT NULL,
        city VARCHAR(200),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($stmt);

    echo "TABLEs created successfully!";

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}

?>