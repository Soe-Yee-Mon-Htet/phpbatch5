<?php

    echo __DIR__ . "<br/>"; // C:\xampp\htdocs\php(25-8-2025)\part2\26-2-2026\l22namespaceexercise

    spl_autoload_register(function($classname){
        echo "Loading  = {$classname} <br/>";
        $file = str_replace("\\","/",$classname).".php";
        echo $file . "<br/>";

        if(file_exists($file)){
            require_once(__DIR__."\\".$file);
        } else {
            echo "No Files";
        }
    });

    use gallery\slideshow as view;

    $musicobj = new Music();
    $musicobj->play();

    $videoobj = new Video();
    $videoobj->play();


    $photoobj = new gallery\Photo();
    $photoobj->play();

    $imageobj = new gallery\slideshow\Image();
    $imageobj->play();

    $picture = new view\Picture();
    $picture->play();
    

    
?>