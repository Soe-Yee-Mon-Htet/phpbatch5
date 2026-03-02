<?php
    if(isset($_POST["submit"])){
        echo "Submit Exists <br/>";

        $getname = textfilter($_POST["name"]);
        $getemail = textfilter($_POST["email"]);
        $getpass = textfilter($_POST["password"]);

        echo $getname . "<br/>";
        echo $getemail . "<br/>";
        echo $getpass . "<br/>";
    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    // MySQLi Procedural
    $conn = mysqli_connect(hostname: "localhost",username: "root",password:"",database:"phpone",port:3307);
    if($conn->connect_error){
        echo "Failed to connect mysqli" . $conn->connect_error;
        exit();
    } else {
        echo "Connect Successfully! <br/>";
    }

    // Data Insert
    // 1. DB connect
    // 2. query
    // 3. prepare (encrypt) - @#$%&()
    // 4. bind_param(decrypt) - password
    // 5. execute
    // 6. close
    $stmt = "INSERT INTO users(name,email,password) VALUE(?,?,?)"; // VALUES($getname,$getemail,$getpass)
    $insertstmt = mysqli_prepare($conn,$stmt);
    mysqli_stmt_bind_param($insertstmt,"sss",$getname,$getemail,$getpass);
    mysqli_stmt_execute($insertstmt);

    echo "New User Create Successfully";
    mysqli_close($conn);



?>  


<!DOCTYPE html>
<html> 
    <head>
        <title>Register Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Register Form</h3>

                <form action="" method="POST">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(224)
) -->