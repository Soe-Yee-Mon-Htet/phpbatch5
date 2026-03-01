<?php
    // PHP Loop
    // for loop 
    // for each 
    // while
    // do while 

    // Indexed Array
    $colorones = ["red","green","blue","white","black","gray","pink"];
    echo count($colorones);
    var_dump($colorones);

    $coloronekey = array_keys($colorones);
    $coloronevalue = array_values($colorones);
    var_dump($coloronekey[0]);
    var_dump($coloronevalue[0]);

    print_r($coloronekey,$coloronevalue); //error
    echo $coloronekey. ":" .$coloronevalue; // error = Array to String conversion
    
   
    for($i = 0; $i < count($colorones); $i++){
        // echo $i; // 0 to 6 length = 7

        echo "key:value = $coloronekey[$i] : $coloronevalue[$i] .";
    };
    // for(let i = 0; i < color.length;i++){
    //     echo something
    // }

    // for loop
    for($i = 0; $i < count($colorones); $i++){
        // echo $i; // 0 to 6 length = 7

        echo "This is Indexed array or manual array by for loop = index key is ${i}. value is $colorones[$i]";
    };


    // for each loop
    foreach($colorones as $key=>$colorone){
        echo "The  key: value is $key : $colorone .";
    };

    foreach($colorones as $key=>$colorone){
        echo "The  key: value is ".$key." : ".$colorone. ".";
    };


    // while loop
    $x = 0;
    while($x < count($colorones)){
        echo "key:value = ${x} : $colorones[$x].";
        $x++;
    };


    // do while loop

    $y = 0;
    do{
        echo $colorones[$y];
        $y++;
    } while(
        $y < count($colorones)
    );





?>