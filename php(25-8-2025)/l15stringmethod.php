<?php
    // strlen(string) Function

    $words = "Save Yourself";
    echo strlen($words); //13


    // str_word_count(string) Funtion

    // str_word_count(string,return) Function
    
    // 0 - Default(string)
    // 1 - Return an array
    // 2 - Return an array

    $text = "Save Myanmar Country";
    echo str_word_count($text); // 3

    echo "<pre>" . print_r(str_word_count($text,1),true) . "</pre>";
    // <pre>Array
    // (
    //     [0] => Save
    //     [1] => Myanmar
    //     [2] => Country
    // )
    // </pre>

    echo "<pre>" . print_r(str_word_count($text,2),true) . "</pre>";

    // ucwords(string)
    // ucwords(strng,delimiters)
    $country = "myanmar country, i live in myanmar";
    echo ucwords($country); //Myanmar Country, I Live In Myanmar
    echo ucwords($country,","); //Myanmar country, i live in myanmar

    // lcfirst() Function
    $message = "MYANMAR COUNTRY, I LIVE IN YANGON";
    echo lcfirst($message);

    // ucfirts()
    $country = "myanmar country, i live in myanmar";
    echo ucfirst($country);

    // strtoupper(string)
    $string = "welcome to my country";
    echo strtoupper($string);
    echo strtolower(strtoupper($string));

    // chunk_split(string,length) Function
    $string = "MYANMAR COUNTRY";
    echo chunk_split($string,3,","); //MYA,NMA,R C,OUN,TRY,

    // substr(string,start index/offset, end length)
    $country = "Welcome Myanmar";
    echo substr($country,0,6);

    // strpos(string,find)
    // strrpos(string,find)
    // stripos(string, find)
    // strripos(string,find)
    
    $captions = "Lorem ipsum dolor, sit amet consectetur ipsum adipisicing elit ipsum.";
    echo strpos($captions,"Ipsum"); // error
    echo strpos($captions,"ipsum"); //6 (index number)
    echo strrpos($captions,"ipsum"); // 63 (lastest index number)
    echo stripos($captions,"Ipsum"); // 6 (index number ) not case sensitive
    echo strripos($captions,"Ipsum"); // (Lastest index number) not case sensitive


    // str_replace(search,replace,string) Function
    $captions = "Lorem ipsum dolor, sit amet consectetur ipsum adipisicing elit ipsum.";
    echo str_replace("ipsum","Love",$captions);
    echo $captions;

    // substr_replace(string,replace,start index)
    // substr_replace(string,replace,start index,end length)
    $greeting = "Welcome Myanmar";
    echo substr_replace($greeting,"Thailand",8);
    echo substr_replace($greeting,"Hello",0,7);

    // trim()
    // trim(string,characters)
    $title = "        Welcome to my country           ";
    echo trim($title);

    $subtitle = "Welcome to my country";
    echo trim($subtitle,"try");

    // ltrim()
    // trim(string,characters)
    $sayhi = "   /Migarlarpar/  ";
    $sayhi = "/Migarlarpar/";
    echo ltrim($sayhi,"/Miga");

    // rtrim()
    echo rtrim($sayhi,"/");

    // str_repeat()
    // str_repeat(string,count)
    echo str_repeat("A Kyal Gyi",3); //A Kyal GyiA Kyal GyiA Kyal Gyi

    // strcmp(string1,string2) case sensitive
    // 0 = if the two strings are equal
    // <0 = if string1 is less than string2
    // >0 = if string1 is greater than string2

    echo strcmp("I love my job","I love my job"); //0
    echo strcmp("I love my job","I love"); // greater than 0
    echo strcmp("I love","I love my job"); //  less than 0

    // explode(separator,string,limit)
    $words = "Welcome to My Country";
    echo "<pre>" .print_r(explode(" ",$words),true) ."</pre>"; 
    // <pre>Array
    // (
    //     [0] => Welcome
    //     [1] => to
    //     [2] => My
    //     [3] => Country
    // )
    // </pre>
    
    echo "<pre>" .print_r(explode(" ",$words,0),true) ."</pre>";  //[0] => Welcome to My Country
    echo "<pre>" .print_r(explode(" ",$words,1),true) ."</pre>";  //[0] => Welcome to My Country
    echo "<pre>" .print_r(explode(" ",$words,2),true) ."</pre>";  //[0] => Welcome
                                                                  // [1] => to My Country
    echo "<pre>" .print_r(explode(" ",$words,3),true) ."</pre>";  //[0] => Welcome
                                                                  // [1] => to
                                                                  // [2] => My Country

                                                                
    // implode(separator,array)
    $words = ["orange","apple","banana"];
    echo "<pre>" .print_r(implode(" ",$words),true) ."</pre>"; //<pre>orange apple banana</pre>
    echo implode(" ",$words); //orange apple banana
    echo implode("-",$words); //orange-apple-banana

    // join(separator,array)
    echo join(",",$words); //orange,apple,banana
    echo join("-",$words); //orange-apple-banana

    // number_format(number)
    // number_format(number, decimals)
    echo number_format("1000000"); //1,000,000
    echo number_format("1000000",2); //1,000,000.00

    // stripslahses(string)
    $str = 'He\'s my brother';
    echo $str;

    $str = "He\'s my brother.";
    echo $str; //He\'s my brother.
    echo stripslashes($str); //He's my brother.

    // basename(path)
    // basename(path,suffix) //complicated code
    $path = "./assets/img/cover.jpg";
    echo $path; //./assets/img/cover.jpg
    echo basename($path); //cover.jpg
    echo basename($path,".jpg"); //cover

    // pathinfo(path)
    // pathinfo(path,flags)

    // PATHINFO_DIRNAME
    // PATHINFO_BASENAME
    // PATHINFO_EXTENSION
    // PATHINFO_FILENAME
    $filepath = "./assets/img/user/cover.jpg";
    echo "<pre>" . print_r(pathinfo($filepath),true). "</pre>";
    echo pathinfo($filepath)["dirname"]; //./assets/img/user
    echo pathinfo($filepath,PATHINFO_DIRNAME);



?>