<?php
    // array_combine (key,value);
    $name = array("aung aung","su su","kyaw kyaw","hla hla");
    $age = [30,25,34,40];

    $result = array_combine($name,$age);
    echo "<pre>" . print_r($result,true) ."</pre>";

    echo $result["kyaw kyaw"]; //34

    // count(array)
    $vehicles = ["toyota","ford","audi","mazda","suzuki","ford","bmw"];
    echo count($vehicles); //7

    // array_count_values(array)
    $vehicles = ["toyota","ford","audi","ford","toyota"];
    echo "<pre>" .print_r(array_count_values($vehicles)) . "</pre>"; 
    // [toyota] => 2
    // [ford] => 2
    // [audi] => 1

    // array_chunk(array,length,preservekey)

    // preservekey =  true/false 
    $couples = ["aung aung","su su","kyaw kyaw","nu nu"];
    $results = array_chunk($couples,2);
    $result2 = array_chunk($couples,2,true); // 0 1 2 3
    $result3 = array_chunk($couples,2,false); // 0 1 0 1
    echo "<pre>" . print_r(array_chunk($couples,2),true). "</pre>"; 
    // [0] => Array
    //     (
    //         [0] => aung aung
    //         [1] => su su
    //     )

    // [1] => Array
    //     (
    //         [0] => kyaw kyaw
    //         [1] => nu nu
    //     )

    echo $results[0][1]; // su su
    echo "<pre>" . print_r($result2,true). "</pre>"; // 0 1 2 3 4 5
    echo "<pre>" . print_r($result2,false). "</pre>"; //01 01 01 01

    // array_diff(array1,array2,.....)
    // Note:we don't need to consider any index or keyname
    $colors1 = ["red","green","blue","pink"];
    $colors2 = ["red","blue","pink","silver"];
    $colors3 = ["green","blue","orange","violet"];

    echo "<pre>" .print_r(array_diff($colors1,$colors2),true)."</pre>"; //[1] => green
    echo "<pre>" .print_r(array_diff($colors2,$colors1),true)."</pre>"; //[3] => silver
    echo "<pre>" .print_r(array_diff($colors3,$colors2,$colors1),true)."</pre>"; //[2] => orange
                                                                                // [3] => violet

    // compare (only value)
    $col1 = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow"
    ];
    $col2 = [
        "e" => "red",
        "f" => "green",
        "c" => "blue"
    ];
    echo "<pre>" .print_r(array_diff($col1,$col2),true)."</pre>";   //[d] => yellow
    echo "<pre>" .print_r(array_diff($col2,$col1),true)."</pre>";   // ()    
    
    // array_diff_assoc(array1,array2,....)
    // compare (both key and value)
    $col1 = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow"
    ];
    $col2 = [
        "e" => "red",
        "f" => "green",
        "c" => "blue"
    ];
    echo "<pre>" .print_r(array_diff_assoc($col2,$col1),true)."</pre>"; //[e] => red
                                                                        // [f] => green
    echo "<pre>" .print_r(array_diff_assoc($col1,$col2),true)."</pre>"; //[a] => red
                                                                        // [b] => green
                                                                        // [d] => yellow

    // array_diff_key(array1,array2,....)
    $col1 = [
        "a" => "red",
        "b" => "yellow",
        "c" => "blue",
        "d" => "green",
        "f" => "pink"
    ];
    $col2 = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "e" => "orange"
    ];
    echo "<pre>" .print_r(array_diff_key($col1,$col2),true)."</pre>"; //[d] => green
                                                                      // [f] => pink
    echo "<pre>" .print_r(array_diff_key($col2,$col1),true)."</pre>";  //[e] => orange

    // array_intersect(array1,array2,...)
    $num1 = [10,20,30,70,80];
    $num2 = [10,20,30,40,50,90,80];
    echo "<pre>" .print_r(array_intersect($num1,$num2),true)."</pre>";

    $col1 = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow"
    ];
    $col2 = [
        "a" => "red",
        "f" => "green",
        "d" => "orange"
    ];
    echo "<pre>" .print_r(array_intersect($col1,$col2),true)."</pre>"; //[a] => red
                                                                        // [b] => green

    // array_fill(startindex,count,value) 
    echo "<pre>" .print_r(array_fill(0,5,"green"),true)."</pre>";
    echo "<pre>" .print_r(array_fill(2,5,"red"),true)."</pre>";


    // array_fill_keys(keys,value)
    $keys = ["a","b","c","d"];
    echo "<pre>" .print_r(array_fill_keys($keys,"pink"),true)."</pre>";

    // array_key_exists(key,array ) (just for assoc array)
    $operators = [
        "mpt" => "ftth",
        "ooredoo" => "broadband"
    ];
    if(array_key_exists("mpt",$operators)){
        echo "Key exitsts";
    } else{
        echo "Key does not exist"
    };

    // array_merge(array1,array2)
    $arr1 = ["red","green"];
    $arr2 = array("blue","yellow");
    $arr3 = ["orange","violet"];

    echo "<pre>" .print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>";

    // array_keys(array,value)
    // array_keys(array, value, strict)
    $phones = [
        "mpt" => "ftth",
        "ooredoo" => "broadband",
        "telenor" => "wifi"
    ];
    echo "<pre>" .print_r(array_keys($phones,"wifi"),true)."</pre>";
    echo array_keys($phones,"broadband")[0]; //ooredoo

    $numbers = [10,20,30,"10"];
    echo "<pre>" .print_r(array_keys($numbers,"10"),true)."</pre>"; // [0] => 0
                                                                    // [1] => 3
    echo "<pre>" .print_r(array_keys($numbers,10),true) . "</pre>"; // [0] => 0
                                                                    // [1] => 3
    echo "<pre>" .print_r(array_keys($numbers,"10",true),true)."</pre>"; //[0] => 3
    echo "<pre>" .print_r(array_keys($numbers,10,true),true)."</pre>"; //[0] => 0

    // array_map(callback,array1,array2,...)
    $males = ["tun tun","aung aung","kyaw kyaw","thuza","zaw zaw"];
    $females = array("hla hla","su su","nu nu","yu yu","thida");

    function genderone($name){
        return ("Mr".$name);
    };

    function gendertwo($males,$females){
        return ("Mr.".$males."&". "Mrs.".$females);  
    };

    echo "<pre>" .print_r(array_map("genderone",$females),true)."</pre>"; //[0] => Mrtun tun
                                                                            // [1] => Mraung aung
                                                                            // [2] => Mrkyaw kyaw
                                                                            // [3] => Mrthuzar

    
    echo "<pre>" .print_r(array_map("gendertwo",$males,$females),true)."</pre>";    //[0] => Mr.tun tun & Mrs.hla hla
                                                                                    // [1] => Mr.aung aung & Mrs.su su
                                                                                    // [2] => Mr.kyaw kyaw & Mrs.nu nu
                                                                                    // [3] => Mr.thuza & Mrs.yu yu
                                                                                    // [4] => Mr.zaw zaw & Mrs.thida
                                                                            
    // sort(array)

    $cars = ["vilov","bmw","toyota","mazda","suzuki"];
    sort($cars);
    echo "<pre>" .print_r($cars,true)."</pre>";   //[0] => bmw
                                                    // [1] => mazda
                                                    // [2] => suzuki
                                                    // [3] => toyota
                                                    // [4] => vilov


    $numbers = [10,50,"80",90,35,"100",130,"250",70];
    sort($numbers);
    echo "<pre>" .print_r($numbers,true)."</pre>"; //[0] => 10
                                                    // [1] => 35
                                                    // [2] => 50
                                                    // [3] => 70
                                                    // [4] => 80
                                                    // [5] => 90
                                                    // [6] => 100
                                                    // [7] => 130
                                                    // [8] => 250   
    
    // array_multisort(array)
    $carbrands = ["vilov","bmw","toyota","mazda","suzuki"];
    array_multisort($carbrands);
    echo "<pre>" .print_r($carbrands,true) ."</pre>";   // [0] => bmw
                                                        // [1] => mazda
                                                        // [2] => suzuki
                                                        // [3] => toyota
                                                        // [4] => vilov

    $numbers = [10,50,"80",90,35,"100",130,"250",70];
    array_multisort($numbers);
    echo "<pre>" .print_r($numbers,true)."</pre>";  // [0] => 10
                                                    // [1] => 35
                                                    // [2] => 50
                                                    // [3] => 70
                                                    // [4] => 80
                                                    // [5] => 90
                                                    // [6] => 100
                                                    // [7] => 130
                                                    // [8] => 250

    // array_reverse(array)   
    $numbers = [10,50,"80",90,35,"100",130,"250",70];
    array_reverse($numbers);
    echo "<pre>" .print_r($numbers,true)."</pre>";                                            

    // array_pad(array,length,value)
    $colors = ["red","green"];
    echo "<pre>" .print_r(array_pad($colors,5,"blue"),true) ."</pre>";

    // array_reduce(array,callback,initial)
    $nums = [10,"20",30];
    function calfun($total,$val){
        return $total += $val;
    };

    echo array_reduce($nums,"calfun",10); //70

    // array_search(value,array)
    $myarrs = ["a","b","c","d","e"];
    echo "<pre>" .print_r(array_search("a",$myarrs),true) ."</pre>"; //<pre>0</pre>


    // array_pop(array)

    $colors = ["red","green","blue"];
    echo "<pre>" .print_r(array_pop($colors),true) ."</pre>"; //<pre>blue</pre>

    array_pop($colors);
    echo "<pre>" .print_r($colors,true) ."</pre>";   // [0] => red
                                                                // [1] => green


    // array_unshift(array,value1,value2,...)
    $colors = ["red","green","blue"];
    array_unshift($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>"; // [0] => silver
                                                                // [1] => violet
                                                                // [2] => red
                                                                // [3] => green
                                                                // [4] => blue

    $colors = [
        "0" => "red",
        "1" => "green",
        "2" => "blue"    
    ];
    array_unshift($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>"; 
    
    
    $colors = [
        "a" => "red",
        "b" => "green",
        "c" => "blue"    
    ];
    array_unshift($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>";


    // array_push(array,value1,value2,...)
    $colors = ["red","green","blue"];
    array_push($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>"; //[0] => red
                                                        // [1] => green
                                                        // [2] => blue
                                                        // [3] => silver
                                                        // [4] => violet

    $colors = [
        "0" => "red",
        "1" => "green",
        "2" => "blue"    
    ];
    array_push($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>"; 
    
    
    $colors = [
        "a" => "red",
        "b" => "green",
        "c" => "blue"    
    ];
    array_push($colors,"silver","violet");
    echo "<pre>" .print_r($colors,true) ."</pre>";      //[a] => red
                                                        // [b] => green
                                                        // [c] => blue
                                                        // [0] => silver
                                                        // [1] => violet

    // array_slice(array,offset/index) 
    $candycolors = ["red","green","blue","yellow","pink"];
    echo "<pre>" .print_r(array_slice($candycolors,0),true) ."</pre>"; 
    // [0] => red
    // [1] => green
    // [2] => blue
    // [3] => yellow
    // [4] => pink
    echo "<pre>" .print_r(array_slice($candycolors,2),true) ."</pre>"; 
    // [0] => blue
    // [1] => yellow
    // [2] => pink
    echo "<pre>" .print_r(array_slice($candycolors,2,1),true) ."</pre>"; //[0] => blue

    // array_splice(array,index,length,array)
    $poloshirts = ["red","green","blue","yellow","pink"];
    echo "<pre>" .print_r(array_splice($poloshirts,1,3),true) ."</pre>"; 


    $males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
    $females = ["su su","yu yu","nu nu"];
    array_splice($males,1,3,$females);
    echo "<pre>" .print_r($males,true) ."</pre>"; 


    // array_sum(array)
    $nums = [10,20,30,40,50];
    echo array_sum($nums); //150

    $nums = [10,20,30,"40",-50];
    echo array_sum($nums); //50

    // array_unique(array)
    $num = [10,20,30,50,10,30,60,70,80,10];
    echo "<pre>" .print_r(array_unique($num),true) ."</pre>"; 

    // array_shift(array)
    $colors = ["red","green","blue"];
    array_shift($colors);
    echo "<pre>" .print_r($colors,true) ."</pre>";    

    $colors = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "violet"
    ];
    array_shift($colors);
    echo "<pre>" .print_r($colors,true) ."</pre>";  

    // unset(arrayindex)
    $colors = ["red","green","blue"];
    unset($colors[1]);
    echo "<pre>" .print_r($colors,true) ."</pre>"; 
    // [0] => red
    // [2] => blue
    echo "<pre>" .print_r(array_values($colors),true) ."</pre>"; 

   $colors = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "violet",
        "e" => "pink"
    ];
    unset($colors["c"]);
    echo "<pre>" .print_r(array_values($colors),true) ."</pre>";
    
    
    // array_walk(array,callbackfuntion,parameter)
   $colors = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "violet",
        "e" => "pink"
    ];

    function myfunone($val,$key){
        echo "Key is $key  and Value is $val";
    };

    array_walk($colors,"myfunone");

    function myfuntwo($val,$key,$p){
        echo "Key is $key  and Value is $val $p";
    };

    array_walk($colors,"myfuntwo","colour");

    function myfunthree(&$val){
        $val = "orange";
        return $val;
        
    };
    array_walk($colors,"myfunthree","colour");
    echo "<pre>" .print_r($colors,true) ."</pre>";
?>  