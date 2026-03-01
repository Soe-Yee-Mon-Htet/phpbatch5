<?php
    date_default_timezone_set("Asia/Yangon");
    // 1 Jan 1970 UTC
    $getdate = getdate();
    echo $getdate; //error
    echo "<pre>".print_r($getdate,true)."</pre>";
    echo $getdate["year"];


    $time = time();
    echo date("A",$time);

    // date_create(time,optional,timezone) with date format("Y/m/d") with date_diff(current,old)

    // eg: date_create(timestamp,timezone_open("Asia/Yangon"))

    $date1 = date_create("8-9-2025");
    echo $date1; //error  Object of class DateTime could not be converted to string
    echo date_format($date1,"Y/m/d"); //2023/01/10
    echo date_format($date1,"d-m-Y"); //10-01-2023

    $date2 = date_create("9-4-2002");
    
    $diffone = date_diff($date1,$date2);
    echo $diffone->format("%m months");
    echo $diffone->format("%d days");
    echo $diffone->format("%y years");

    // [mday] => 8
    // [wday] => 1
    // [mon] => 9
    // [year] => 2025
    $getdate = getdate();
    echo $getdate;
    $date3 = "{$getdate["mday"]}-{$getdate["mon"]}-{$getdate["year"]}";
    $datecreate3 = date_create($date3);
    $date4 = "9-4-2002";
    $datecreate4 = date_create($date4);
    $difftwo = date_diff($date3,$date4);
    echo $difftwo->format("%m months");

    

    
?>