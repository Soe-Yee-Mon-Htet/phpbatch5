<?php


function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

// MySQLi Object Oriented
// $conn = mysqli_connect(hostname: "localhost",username: "root",password:"",database:"phpone",port:3307);
$host = "127.0.0.1";
$dbname = "root";
$dbpassword = "";
$dbusername = "phpone";
$port = "3307";

$conn = new mysqli($host, $dbname, $dbpassword, $dbusername, $port);

if (!$conn) {
    echo "Failed to connect mysqli" . $conn->connect_error;
    die();
} else {
    echo "Connect Successfully! <br/>";
}
;

if (isset($_POST["submit"])) {
    $stmt = $conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $password, $id);
    echo "Submit Exists <br/>";

    $id = $_POST["userId"];
    $name = textfilter($_POST["name"]);
    $email = textfilter($_POST["email"]);
    $password = textfilter($_POST["password"]);

    $stmt->execute();

    $stmt->close();

}

$sql = "SELECT * FROM users";
$results = $conn->query($sql);
echo $results->num_rows;

?>


<!DOCTYPE html>
<html>

<head>
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Register Form</h3>

            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="form-group mb-3">
                    <label for="userId">ID</label>
                    <select name="userId" id="userId">
                        <!-- <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option> -->

                        <?php
                        if ($results->num_rows > 0) {
                            while ($row = $results->fetch_assoc()) {
                                $id = $row['id'];
                                echo "<option value='$id'>$id</option>";
                            }
                        } else {
                            echo "<option value='0'>No Data</option>";
                        }


                        ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name " class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email " class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password " class="form-control">
                </div>

                <input type="submit" name="submit" class="btn btn-primary float-end" value="Sign Up">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(224)
) -->