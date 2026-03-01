<?php
    // Constant Variable
    define("variable name","value");

    // string,int,boolean,float ===> not overwrite
    // variablename should be uppercase a
    // redefind is denied

    define("FULLNAME","YEE MON");
    echo FULLNAME;

    define("FULLNAME","Htet Htet");
    echo FULLNAME;

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","123456789");
    define("DB_NAME","phpdbone");
    echo DB_HOST;
    echo "<br/>";
    echo DB_USER;
    echo "<br/>";
    echo DB_PASS;
    echo "<br/>";
    echo DB_NAME;
    echo "<br/>";

    // constant(variablename)
    echo constant("DB_HOST");
    echo constant("DB_USER");
    echo constant("DB_PASS");
    echo constant("DB_NAME");


    const MESSAGE = "Hello sir, are you ready to learn PHP OOP Concept ?";
    echo MESSAGE; //Hello sir, are you ready to learn PHP OOP Concept ?
    echo constant("MESSAGE");//Hello sir, are you ready to learn PHP OOP Concept ?


    const MESSAGE = "Hello sir, are you ready to learn ES6 OOP Concept ?";
    echo MESSAGE; //Hello sir, are you ready to learn ES6 OOP Concept ?
    echo constant("MESSAGE");//Hello sir, are you ready to learn ES6 OOP Concept ?



?>