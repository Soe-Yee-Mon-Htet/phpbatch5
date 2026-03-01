<?php
    // if statement
    $x = 10;
    $y = 20;

    if($x > $y){
        echo "x is greater than y"
    } 

    if($x < $y){
        echo "x is less than y";
    } //"x is less than y"


    // if else
    if($x > $y){
        echo "X is greater than Y"
    } else{
        echo " X is less than Y"
    };


    // Short Hand
    if($x < $y) echo "X is less than Y" ; else echo "X is greater than Y";


    $color = "gray";
    $colorvalue = $color;

    echo $color;    // gray
    echo $colorvalue;  // gray

    if($colorvalue === "red"){
        echo "My fav color is ${colorvalue}"
    } else {
        echo "I hate ${colorvalue} color."
    }

    // Logical Operators
    // && or || or !

    $a = 100;
    $b = 200;
    $c = 300;
    // 100 < 200 and  200 > 300
    if($a < $b && $b > $c){
        echo "The two condition is true."
    }else{
        echo "The two condition is false"
    };  // The two condition is false


    // 100 < 200 and 200 < 300
    if($a < $b && $b < $c){
        echo "The two condition is true."
    }else{
        echo "The two condition is false"
    };  // The two condition is true

    // 100 < 200 or  200 > 300
    if($a < $b || $b > $c){
        echo "The two condition is true."
    }else{
        echo "The two condition is false"
    };  // The two condition is true.



    // 100 < 200 or  200 > 300 and 100 >300
    // true or (false and false)
    // true or true
    if($a < $b || ($b > $c && $a > $c)){
        echo "The two condition is true."
    }else{
        echo "The two condition is false"
    };  // The two condition is true.


    // 100 < 200 or  200 > 300 and 100 >300
    // (true or false) and false
    // true and false
    if(($a < $b || $b > $c) && $a > $c){
        echo "The two condition is true."
    }else{
        echo "The two condition is false"
    };  // The two condition is false.


    // !(true) == false
    if(!($a < $b)){
        echo "!"
    } else {
        echo "wrong"
    };



    // if() , elseif(), else()
    // 200 > 300
    $($b > $c){
        echo "It is true"
    } elseif($b === 20){
        echo "It is equal"
    } else{
        echo "It is false";
    };

    $($b > $c) echo "It is true" ; elseif($b === 20) echo "It is equal" ; else echo "It is false";

    $($b > $c) 
        echo "It is true" ; 
    elseif($b === 20) 
        echo "It is equal" ; 
    else 
        echo "It is false";


    // Switch case
    // switch(condition){
    //     case stmt1;
    //          echo;
    //          break;
    //     case stmt2;
    //          echo;
    //          break;
    //     case stmt3;
    //          echo;
    //          default;

    // }

    $phone = "iphone";

    switch($phone){
        case "sony":
             echo "sony phone";
             break;
        
        case "iphone":
             echo "iphone";
             break;

        case "mi":
             echo "mi";
             break;

        case "samsung":
             echo "samsung";
             break;

        default:
            echo " I love youtube."

    }


    




?>