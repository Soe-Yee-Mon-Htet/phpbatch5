<?php
    // Arithmetic Operator
    // + , - , * , / , %

    $num1 = 100;
    $num2 = 200;
    $num3 = 30.28;
    $city = "Mawlamyine";
    $car = true;
    $myarrs = ["maung maung","kyaw kyaw"];
    $colors = array("red","green");

    echo "$num1 + $num2"; //100 + 200
    echo "$num1"+ "$num2"; //300

    echo $num1 + $num2; //300
    echo $num2 - $num1; //100
    echo $num1 * $num2; // 20000
    echo $num2 / $num1; //2
    echo $num1 % $num1; //0

    echo $myarrs; //error (Array to String Properties)
    print $myarrs; //error (Array to String Properties)

    var_dump($num1); // int(100)
    var-dump($num2); //float(30.28)
    var-dump($city); //string(10) Mawlamyine
    var-dump($car); // bool(true)
    var-dump($myarrs); //array(2)


    $num4 = true;
    $num5 = "10"; //string
    $num6 = '20'; // string

    var-dump($num5,$num6);

    echo $num5 + $num6; // 30
    echo $num6 - $num5; // 10

    echo $num4 + $num5; // true = 1 + 10 === 11



    // overwirte or override
    $num5 = 50; // int(50)
    $num6 = "60"; // string(2) "60"
    var_dump($num5,$num6);
    var_dump($num5 + $num6); // int(110)


?>