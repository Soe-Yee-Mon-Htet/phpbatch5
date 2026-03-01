<?php
    // json_encode(array);

    // json_decode(array);
    // json_decode(array,true);

    $color = ["red","green","blue"];
    $mycolor = json_encode($color,true);
    var_dump($mycolor); // string
    echo $mycolor; //["red","green","blue"]

    echo "<br/>";

    $students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
    var_dump($students); // array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }
    echo "<br/>";
    echo $students["name"];
    echo "<br/>";
    $mystudents = json_encode($students); // {"name":"aung aung","age":25,"city":"yangon"}
    var_dump($mystudents);
    echo "<br/>";
    echo $mystudents["name"]; //error
    echo "<br/>";

    // Decode by single parameter
    $studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
    $decodedatas = json_decode($studentdatas);
    var_dump($decodedatas); //  object(stdClass)#1 (3) {["name"]=>string(9) "aung aung"["age"]=>int(25)["city"]=>string(6) "yangon"}
    echo $decodedatas->name;

    // ->(object Operator) 





?>