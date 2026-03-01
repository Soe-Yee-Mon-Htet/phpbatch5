<?php
    echo readfile("./l28file.txt"); //Hay I love . It overwrite25
    echo "<hr/>";

    $fileopen = fopen("./l28file.txt","r");

    if($fileopen){
        echo "File Exist";
    } else{
        echo "Don't Exist";
    };

    echo "<br>";

    $filesize = filesize("./l28file.txt");

    // echo fread($fileopen,$filesize); //Hay I love . It overwrite
    $fileread = fread($fileopen,$filesize);
    echo $fileread; //Hay I love . It overwrite
    echo "<hr/>";


    $fileopen = fopen("./l28file.txt","w");
    // $filewrite = fwrite($fileopen,"Hay I love ");
    $filewrite = fwrite($fileopen,"Hay I love . It overwrite by write method");
    $filesize = filesize("./l28file.txt");

    $fileopen = fopen("./l28file.txt","r");
    $fileread = fread($fileopen,$filesize);

    echo $fileread;

    echo "<hr/>";


    $fileopen = fopen("./l28myfile.txt","w");
    // echo $fileopen;

    if($fileopen){
        echo "File exists";
        echo "<br/>";
        $filewrite = fwrite($fileopen,"Hay it is created by me with w method");
        $fileopen = fopen("./l28myfile.txt","r");
        $filesize = filesize("./l28myfile.txt");
        $fileread = fread($fileopen,$filesize);
        echo $fileread;
    } else{
        echo "File does not Exist";
    };

    echo "<hr/>";

    // if i use "x" , something special happens
    // $fileopen = fopen("./myfiles.txt","x"); //execute
    // echo $fileopen;

    // if($fileopen){
    //     echo "File exists";
        
    // } else{
    //     echo "File does not Exist";
    // };

    $fileopen = fopen("./ourfiles.txt","c");
    if($fileopen){
        echo "File exists";
        echo "<br/>";
        $fwrite = fwrite($fileopen,"Hey it is our files with c method");
        $fileopen = fopen("./ourfiles.txt","r");
        $filesize = filesize("./ourfiles.txt");
        $fileread = fread($fileopen,$filesize);
        echo $fileread;
        
    } else{
        echo "File does not Exist";
    };

    echo "<hr/>";

    $fileopen = fopen("./ourfiles.txt","c");
    if($fileopen){
        echo "File exists";
        echo "<br/>";
        $fwrite = fwrite($fileopen,"Hey it is our files with c+ method");
        $fileopen = fopen("./ourfiles.txt","c+");
        $filesize = filesize("./ourfiles.txt");
        $fileread = fread($fileopen,$filesize);
        echo $fileread;
        
    } else{
        echo "File does not Exist";
    };

    echo "<hr/>";

    $fileopen  = fopen("./ourclass.txt","w");

    if($fileopen){
        echo "File exists";
        echo "<br/>";

        $message = "Welcome to our class. ";
        fwrite($fileopen,$message);
        $message = "Welcome to our class . This is second time";
        fwrite($fileopen,$message);

        $fileopen = fopen("./ourclass.txt","r");
        $fileread = fread($fileopen,filesize("./ourclass.txt"));
        echo $fileread;
        
    } else{
        echo "File does not Exist";
    };

    echo "<hr/>";

    // $fileopen  = fopen("./nextfile.txt","a");

    // if($fileopen){
    //     echo "File exists";
    //     echo "<br/>";

    //     fwrite($fileopen,"Hello World with (a = append) method");
    //     $fileopen = fopen("./nextfile.txt","r");
    //     $fileread = fread($fileopen,filesize("./nextfile.txt"));
    //                           // length 
    //     // $fileread = fread($fileopen,5);
    //     echo $fileread;
       
        
    // } else{
    //     echo "File does not Exist";
    // };

    // echo "<hr/>";

    // ---------------------
    // Other Files' Useful Function
    // file_get_contents() = Read
    // file_put_contents() = Write 
    // file_exists()       = check filed exists or not
    // copy()              = copies a file 
    // rename()            = rename a file
    // unlink()            = delete a file

    // $existingfile = "l28file.txt";
    // $newfile = "l28newfile.txt";
    // $message = file_get_contents($existingfile);
    // $message = "\n Thanks for using php file system. this is l28 new file path\n";
    // echo $message; // error
    // file_put_contents($newfile,$message); //Thanks for using php file system


    $existingfile = "l28file.txt";
    $newfile = "l28newheadfile.txt";

    if(file_exists($existingfile)){
        echo "File Exists";
        echo "<br/>";

        $message = file_get_contents($existingfile);
        $message = "\n This is adding file to l28file.txt\n";
        file_put_contents($newfile,$message);
        echo $message;

        
    } else {
        echo "File not found";
    }

    



?>