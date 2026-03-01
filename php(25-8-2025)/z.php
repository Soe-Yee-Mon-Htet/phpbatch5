 <?php
    echo "Hello! Files";
    echo "<br/>";

    $read = file_get_contents("sample.json");
    // echo $read;
    // echo "<hr/>";
    // echo var_dump($read);

    // echo "<hr/>";
    $todecodearrays = json_decode($read,true); // 1


        $addTwo =  [
        [    "id"=>"6",
            "name" =>"htet",
            "city"=>"Yangon"
        ],
        [
            "id"=>"7",
            "name" =>"mon",
            "city"=>"Yangon"
        ]];

    // $some = array_push($todecodearray,$addTwo);
    // echo "<pre>".print_r($some,true)."</pre>";

    // foreach ($addTwo as $key => $one) {
    //     $todecodearrays[] = $one;
    //     file_put_contents("sample.json",json_encode($todecodearrays));
    // };

    foreach ($todecodearrays as $key => $todecodearray) {
        // echo "<pre>".print_r($todecodearray,true)."</pre>"; 
        // echo $key; // 0123456
        // echo $todecodearray["id"]; //1234567
        // echo $todecodearray["name"];
        // echo "<pre>".print_r($todecodearrays[$key]["name"],true)."</pre>";

        if($todecodearray["id"] === "4"){
            // id 7 = key 6
            // echo "<pre>".print_r($todecodearrays[$key],true)."</pre>";
            $todecodearrays[$key]["name"] = "HHHHHHHHHHHHHHHHHHHH";
            // echo "<pre>".print_r($todecodearrays,true)."</pre>";
        };
        file_put_contents("sample.json",json_encode($todecodearrays));

    };

    // echo $key;
    
    

    
?>