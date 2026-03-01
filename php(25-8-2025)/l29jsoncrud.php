<?php

    $files =file_get_contents("./l29studentdb.json");
    var_dump($files);
    echo "<hr/>";

    $decodefiles = json_decode($files,true);
    var_dump($decodefiles);
    echo "<hr/>";

    echo "<pre>" . print_r($decodefiles) ."</pre>";
    echo "<hr/>";


    // foreach($decodefiles as $decodes){
        // echo "<pre>" . print_r($decodes,true) ."</pre>";
        // echo "<hr/>";

        // echo "<pre>" . print_r($decodes["name"],true) ."</pre>";
        // echo "<hr/>";

        // foreach($decodes as $key=>$decode){
        //     echo $key . "=" .$decode . "<br/>";
        // };

        // echo "<hr/>";
    // };

    // Create
    $newdatas = [
        [
            "id" => 8,
            "name" => "su",
            "city" => "Mandalay"
        ],
        [
            "id" => 9,
            "name" => "myat",
            "city" => "Myitkyina"
        ],
        [
            "id" => 10,
            "name" => "lin",
            "city" => "MOnywa"
        ]
    ]; 

    foreach ($newdatas as $newdata) {
        // echo "<pre>" . print_r($newdata,true) ."</pre>";
        array_push($decodefiles,$newdata);
        file_put_contents("./l29studentdb.json", json_encode($decodefiles));

    };


   





?>


<!-- [
    {
        "id":"1",
        "name" :"aung aung",
        "city":"Yangon"
    },
    {
        "id":"2",
        "name" :"mg",
        "city":"Yangon"
    },
    {
        "id":"3",
        "name" :"kyaw",
        "city":"Yangon"
    },
    {
        "id":"4",
        "name" :"soe",
        "city":"Yangon"
    },
    {
        "id":"5",
        "name" :"yee",
        "city":"Yangon"
    },
    {
        "id":"6",
        "name" :"htet",
        "city":"Yangon"
    },
    {
        "id":"7",
        "name" :"mon",
        "city":"Yangon"
    }
] -->