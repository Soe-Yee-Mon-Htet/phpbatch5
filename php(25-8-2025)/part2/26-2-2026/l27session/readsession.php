<?php
    echo "Read Session <br/>";

    session_start();
    if(isset($_SESSION["idxcount"])){
        echo "IDX COUNT = " . $_SESSION["idxcount"];
    } else{
        echo "NO DATA";
    }
?>