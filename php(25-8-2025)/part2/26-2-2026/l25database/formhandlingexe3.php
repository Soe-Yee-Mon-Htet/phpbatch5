<?php
$name = "";
$nameerror = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = $_POST["name"];
        $city = $_POST["city"];
        $favcolor = $_POST["favcolor"];
    }


}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Handling Exercise 1</title>
</head>

<body>
    <div>
        <form action="" method="POST">
            <div>
                <label for="name">Name</label>
                <span style="color: red">* <?php echo $nameerror; ?></span>
                <input type="text" name="name" id="name" />
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="name" />
            </div>

            <div>
                <input type="radio" name="favcolor" id="favred" value="Red" />
                <label for="favred">RED</label>

                <input type="radio" name="favcolor" id="favgreen" value="Green" />
                <label for="favgreen">Green</label>

                <input type="radio" name="favcolor" id="favblue" value="Blue" />
                <label for="favblue">BLUE</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>


<?php
echo "<h2>My Information .... </h2>";
echo "Name $name <br/>";
echo "City $city <br/>";
echo "Color $favcolor <br/>";


?>