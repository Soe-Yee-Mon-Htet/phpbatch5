<?php

    // Comparison Operators
    // == , === , != or <> ,!== , > , < , >= , <= ,? (ternary Operator)

    // Ternary Operator
    // echo (stm1 compare stm2)? true : false;

    $num1 = 10;
    $num2 = 20;
    echo ($num1 == $num2)? "Your condition is true." : "Your condition is false"; // Your condition is false

    $num1 = 10;
    $num2 = "10";
    echo ($num1 == $num2)? "Your condition is true." : "Your condition is false"; //Your condition is true.
    echo ($num1 === $num2)? "Your condition is true." : "Your condition is false"; //Your condition is true. (check both datatype and number)

        // 10    "10"
    echo ($num1 != $num2)? "Your condition is true." : "Your condition is false"; //Your condition is false
        
        // 10    "10"
    echo ($num1 <> $num2)? "Your condition is true." : "Your condition is false"; //Your condition is false
    
        // 10    "10"
    echo ($num1 !== $num2)? "Your condition is true." : "Your condition is false"; //Your condition is true.
    

    $num1 = 10;
    $num2 = 20;
    echo ($num1 > $num2)? "Your condition is true." : "Your condition is false"; //Your condition is false.
    echo ($num1 < $num2)? "Your condition is true." : "Your condition is false"; //Your condition is true.
    echo ($num1 >= $num2)? "Your condition is true." : "Your condition is false"; //Your condition is false.
    echo ($num1 <= $num2)? "Your condition is true." : "Your condition is false"; //Your condition is true.
    

?>