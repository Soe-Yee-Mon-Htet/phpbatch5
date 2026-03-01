<?php

    // echo __DIR__; //C:\xampp\htdocs\php(25-8-2025)\part2\26-2-2026\l23customloading
    
    class CustomLoad {
        public static function loader($classname){
            $file =  __DIR__."\\".$classname.".php";
            if(file_exists($file)){
                require_once($file);
            } else {
                echo "File Not Found";
            }
            
        }
    }

    // use gallery\slideshow as view;

    // $musicobj = new Music();
    // $musicobj->play();

    // $videoobj = new Video();
    // $videoobj->play();


    // $photoobj = new gallery\Photo();
    // $photoobj->play();

    // $imageobj = new gallery\slideshow\Image();
    // $imageobj->play();

     
    

    
?>