<?php

    // yield keyword

    function funone(){
        yield "1";
        yield "2";
        yield "3";
    };

    $numbers = funone();
    foreach($numbers as $number){
        echo $number;
    };

    function funtwo(){
        $index = 0;

        while($index < 10){
            yield $index;
            $index++;
        };
    };
    $numbers = funtwo();
    foreach($numbers as $number){
        echo $number."<br/>";
    };

    // yeild with from
    function funthree(){
        yield from [1,2,3,4,5];
        yield 6;
        yield 7;
    };

    $numbers = funthree();
    foreach($numbers as $number){
        echo $number ."<br/>";
    }

    



?>