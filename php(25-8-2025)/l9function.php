<?php
    // User Defined Function => General Function

    function name(){
        echo
    };

    // -------------------------------------------------------

    // (2) Parameter function or Argument function
        //    1. Single Parameter
        //    2. Multi Parameter

        function name(para1){
            echo
        };

        function name(para1,para2){
            echo
        };

    // -------------------------------------------------------
    // (3) Default Parameter function or Default Argument Function

        function name($name="aung aung",$age = 20){
            echo
        }

    // -------------------------------------------------------

        function myfun(){
            echo "my name is Ms.Sophia.";
        };

        myfun();

        function myfun1(){
            $num1 = 10;
            $num2 = 20;
            $cal = $num1 + $num2;
            echo $cal;
            var_dump($cal);
        };

        myfun1();

    // -------------------------------------------------------
        function singlefun($name){
            echo "My name is $name.";
        };

        singlefun("Ms.Rose");
        singlefun("Mg Mg");
    // -------------------------------------------------------
        function multifun($name,$age){
            echo "My name is".$name;
            echo "My age is".$age;
        };

        multifun("Sophia",20);

    // -------------------------------------------------------

    function defaultfun($name = "Aung Aung"){
        echo "His name is $name";
    };
    
    defaultfun();
    defaultfun("Mg Mg");


    function defaultfun1($num1 = 10, $num2 = 20){
        $total = $num1 + $num2;
        echo $total;
    }
    defaultfun1();
    defaultfun1(50,50);
    defaultfun1(30);

    // Return
    function myreturn($num1){
        $cal = $num1 + 10;
        return $cal;
    };

    echo myreturn(100); //110

    function returnfun1($num1){
        return $cal = $num1 + 10;
    };

    echo returnfun1(200); // 210

    function returnfun2($num1,$num2,$num3){
        $cal = $num1 + $num2 + $num3;
        return $cal;
    };

    echo returnfun2(10,20,30); //60

    function returnfun3($num1 = 20 , $num2 = 20, $num3 = 20){
        return $cal = $num1 + $num2 + $num3;
    };

    echo returnfun3(10); //50
    echo returnfun3(10,10); //40

    // Dynamic Function Call
    $dyn1 = myreturn(); //error
    $dyn1 = myreturn(300); //310
    echo $dyn1;

    $dyn2 = "returnfun3";
    echo $dyn2();  //60

    $myfun = "returnfun3"; // Yes
    $myfun = "myfunction"; // No
    if(function_exists($myfun)){
        echo " Yes, it exists";
    } else{
        echo "No, it doesn't";
    };

    
?>