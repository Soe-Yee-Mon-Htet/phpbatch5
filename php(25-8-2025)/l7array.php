<?php
    // Arrays
    // (i)      Indexed Array (Manul Array)
    // (ii)     Associative Array
    // (iii)    Multidimensional Array

    // (i)      Indexed Array (Manul Array)
    $names = array("aung","maung","zaw","kyaw","tun");
    // echo $names; //error
    // print $names; //error


    echo count($names);
    var_dump($names);
    print_r($names);

    $colors = ["red","green","blue","black","white","pink"]; // 6 => index 0 to 5
    // echo $colors: //
    
    echo count($colors); //5
    print_r($colors);

    echo "<pre>".print_r($colors,"true")."</pre>";
    echo "<pre>".print_r($colors,false)."</pre>";

    // add to array
    $colors[6] = "gray";

    // print out
    echo $colors[0];

    // ---------------------------------------------------------------------------------------------------------

    // (ii)     Associative Array
    // Old Method
    $news = array("pone" => "This is post one","ptwo" => "This is post two","pthree" => "This is post three");

    // echo $news; //error
    var_dump($news);
    echo count($news); //3
    print_r($news);

    echo "<pre>".print_r($news,"true")."</pre>";

    $media = [
        "pone" => "This is post one",
        "ptwo" => "This is post two",
        "pthree" => "This is post three",
        "pfour" => "This is post four",
    ];

    echo count($media);
    var_dump($media);

    // Add to associative array
    $media["pfive"] =   "This is post five"
    echo count($media);

    // print out
    echo $media["pfive"];

    // ---------------------------------------------------------------------------------------------------------

    // (iii)    Multidimensional Array
    $paints = array(
        array("red","green","blue"),
        array("pen","pencil","ruler"),
        array("paper","plastic")
    );

    // echo count($paints); //3
    // var_dump($paints);
    // print_r($paints);


    $maincolors = [
        ["red","green","blue"],
        ["pen","pencil","ruler"],
        ["paper","plastic"]
    ];

    // echo count($maincolors);
    // var_dump($maincolors);
    // print_r($maincolors);

    // echo $maincolors[0][0]; //red
    // echo $maincolors[1][1]; // pencil
    // echo $maincolors[2][1]; // plastic

    $persons = array(
        array("name" => "aung aung","age"=> 20),
        array("name" => "mg aung","age"=> 21),
        array("name" => "mg mg","age"=> 22),
        array("name" => "kyaw kyaw","age"=> 30),
    );

    echo $persons[0]["name"]; // aung aung

    echo $persons[2]["age"]; // 22

    $persons[0]["gender"] = "female";


?>