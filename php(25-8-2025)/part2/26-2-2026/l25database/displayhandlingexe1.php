<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling Exercise 1</title>
    </head>
    <body>
        <div>
            <h3>Welcome to <?php echo $_GET["city"] ?></h3>
            <p>I am <?php echo $_GET["name"] ?>. GET method</p>
        </div>
        <br>
        <div>
            <h3>Welcome to <?php echo $_POST["city"] ?></h3>
            <p>I am <?php echo $_POST["name"] ?>. Post method</p>
        </div>
    </body>
</html>