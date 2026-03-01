<?php
    // Variables scope
    // (i)  Global Variable Scope 
    // (ii) Local Variable Scope
    // (iii)Static Variable Scope 

    // global keyword

    $num1 = 100; // Global Variable

    function funone(){
        // Even though we declare $num1 in global scope, it cannot use in function.
        // This is the difference from javascript.
        echo "Global Variable num1 ${num1}";
    };

    funone();
    echo "Global Variable num1 ${num1}";

    function funtwo(){
        $num2 = 200; // local variable
        echo "Local Variable num2 = ${num2}";
    };
    funtwo();

    $num3 = 300;
    $num4 = 400;

    function funthree(){
        global  $num3,$num4;
        global $result; //700
        $result = $num3 + $num4; // local
        echo $result;
    };
    funthree();

    global $result; //700
    echo $result;

    // Super Global Variable

    $num5 = 500;
    $num6 = 600;
    
    function funfour(){
        $GLOBALS["sum"] = $GLOBALS["num5"] + $GLOBALS["num6"];
        echo $sum;// error
        echo $GLOBALS["sum"];

    };

    funfour();
    // 
    echo $sum; // 1100

    $num7 = 700;

    function funfive(){
        global $num7;
        // echo $num7+100;  //800

        $num7++;
        echo $num7;
    };

    funfive(); //701
    funfive(); //702
    funfive(); //703


    function funsix(){
        $num8 = 800;
        $num8++;
        echo $num8;
    };

    funsix(); //801
    funsix(); //801
    funsix(); //801


    // static Keyword
    function funseven(){
        static $num9;
        static $num9 = 900;
        $num9++;
        echo $num9;
    };

    funseven();
    funseven();
    funseven();


    // passing by reference (pr &)
    $num10 = 100;
    function funeight($num10){
        $num10 = 10000;
        echo $num10;
    };
    // echo $num10; //100
    funeight($num10); //10000
    echo $num10; //100


    $name = "aung aung";

    function funten($val){
        $val = "su su";
        echo $val;
    };

    funten($name); //su su
    echo $name; // su su
    echo $name; // su su











?>