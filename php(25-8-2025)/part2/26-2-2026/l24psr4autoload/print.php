<?php

    echo "Print.php";
    require_once("vendor/autoload.php");

    use app\Music;
    use app\gallery\Photo;
    use app\gallery\animateshow\Portrait;

    echo "<br/>";
    $music = new Music();
    $music->play();

    $photo = new Photo();
    $photo->play();

    $portrait = new Portrait();
    $portrait->play();

    

?>


<!-- PSR 4 (PHP Standard Recommendation Version 4) -->