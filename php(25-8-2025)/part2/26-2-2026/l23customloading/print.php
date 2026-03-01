<?php
    require_once "CustomLoad.php";

    CustomLoad::loader("Music");
    CustomLoad::loader("Video");
    CustomLoad::loader("gallery\slideshow\Picture");

    use gallery\slideshow as view;

    $musicobj = new Music();
    $musicobj->play();

    $videoobj = new Video();
    $videoobj->play();


    // $photoobj = new gallery\Photo();
    // $photoobj->play();

    // $imageobj = new gallery\slideshow\Image();
    // $imageobj->play();

    $picture = new view\Picture();
    $picture->play();
    

    
?>