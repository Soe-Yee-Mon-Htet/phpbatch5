<?php

    class MagicMethods{
        // public $sample = "U Tin Htut Aung <br/>";

        // public function __get($val){
        //     return "This is undefined value \"${val}\" ";
        // }

        // public function __call($method,$vals){
        //     return "This is undefined \"${method}\" and value" . "<pre>".print_r($vals,true)."</pre>";
        // }

        public static function __callstatic($method,$vals){
            return "This is undefined \"${method}\" and value" . "<pre>".print_r($vals,true)."</pre>";
        }

        // public function __invoke(){
        //     return " this is wrong";
        // }


    }

    $obj1 = new MagicMethods();
    // echo $obj1->sample;
    // echo $obj1->hay;
    // echo $obj1->sayhi("greeting","Hi");
    // echo $obj1();
    // echo $obj1::saystatic("staticeone","staticetwo");
    echo "<hr/>";


?>