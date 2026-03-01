<?php
    // Check Variable Type

    // is_string(variable);
    $val1 = "Save Yourself First";
    echo "val1 is".is_string($val1); // 1 == true(string)
   
    $val2 = 0;
    echo "val2 is".is_string($val2); // empty =  false (not string)

    $val3 = 50;
    echo "val3 is".is_string($val3); // empty =  false (not string)

    $val4 = "50";
    echo "val4 is".is_string($val4); // 1 == true(string)

    $val5 = true;
    echo "val5 is".is_string($val5); // empty

    $val6 = "";
    echo "val6 is".is_string($val6); //1

    // is_numeric(variable) Function
    $val7 = 50;
    echo "val7 is".is_numeric($val7); // 1
    echo "val7 is".is_int($val7); //1
    echo "val7 is".is_integer($val7); //1

    $val8 = 38.25;
    echo "val8 is". is_numeric($val8); //1
    echo "val8 is". is_int($val8); // empty
    echo "val8 is". is_integer($val8); //empty

    $val9 = "50";
    echo "val9 is". is_numeric($val9); //1
    echo "val9 is". is_int($val9); // empty
    echo "val9 is". is_integer($val9); //empty


    // is_float(variable)
    $val9 = 40;
    echo "val9 is ". is_float($val9);   // empty 

    $val10 = 34.56;
    echo "val10 is ". is_float($val10); //1

    $val11 = "40";
    echo "val11 is ". is_float($val11); //empty

    $val12 = "13.45";
    echo "val12 is ". is_float($val12); // empty


    // is_bool(variable) Function
    $val12 = true;
    echo "val12 is ". is_bool($val12);  //1
    echo var_dump($val12); //bool(true)
    echo gettype($val12); //boolean

    // is_array(variable)
    $val13 = ["aung","paing"];
    echo "val13 is ". is_array($val13); //1

    $val13 = [
        "name" => "aung",
        "age" => 20,
        "gender" => "male"
    ];
    echo "val13 is ". is_array($val13); //1

    $val13 = [
        ["aung","kyaw"],
        ["fruit","age"],
        ["watermelon"]
    ];
    echo gettype($val13); //array

    echo "val13 is ". is_array($val13); //1

    $val13 = array("aung","min","ko","lae");
    echo "val13 is ". is_array($val13); //1


    // is_null(variable)
    $val14 = 0;
    echo "val14 is ". is_null($val14); //empty

    $val14 = null;
    echo "val14 is ". is_null($val14); //1

    $val14 = Null;
    echo "val14 is ". is_null($val14); //1



    // empty(variable) Vs isset(variable)

    Note:: The following values are empty
    // 0
    // 0.0
    // "0"
    // ""
    // null
    // NULL
    // FALSE
    // []

    $val15 = []; // value

    if(empty($val15)){
        echo "Yes it is empty.";
    };

    if(isset($val15)){
        echo "Yes it have value.";
    } else{
        echo "it does not have value";
    };

    // isset() VS unset()

    $city = "Yangon";
    $country = "Thailand";
    echo isset($city)? "Yes": "No";
    echo $city; //Yangon
    echo $country; // Thailand

    unset($city,$country);
    echo $city;
    echo $country;

    $val1 = 50;
    $val1 = "Hello World";
    echo var_dump($val1); // int(50)
    echo gettype($val1); //integer

    $val1 = "Hello World";
    echo var_dump($val1); //string(11) "Hello World"
    echo gettype($val1);  //string

    $val1 = 34.56;
    echo var_dump($val1); //float(34.56)
    echo gettype($val1);  //double


?>


