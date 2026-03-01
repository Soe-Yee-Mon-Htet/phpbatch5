<?php
    // 1.$GLOBALS
    // 2.$_SERVER
    // 3.$_REQUEST
    // 4.$_POST
    // 5.$_GET
    // 6.$_FILES
    // 7.$_ENVs
    // 8.$_COOKIE
    // 9.$_SESSION

    $x = 100;
    $y =200;
    
    // function sumresultone(){
    //     global $x,$y;
    //     $total = $x+$y;
    //     return $total;s
    // };s

    // echo sumresultone(); //300
    // echo $total; //error
    

    //  1.$GLOBALS
    function sumresultone(){
        $GLOBALS["total"] = $GLOBALS["x"]+$GLOBALS["y"];
        return $GLOBALS["total"];
    };

    echo sumresultone(); // 300
    echo $total; //300
    echo $GLOBALS["total"]; //300

    echo "<hr>";
    // 2.$_SERVER
    echo $_SERVER["PHP_SELF"]; //l12superglobalvariables.php
    echo "<hr>";
    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36
    echo "<hr>";
    echo $_SERVER["HTTP_HOST"]; // localhost (ipadress)
    echo "<hr>";
    echo $_SERVER["SERVER_NAME"]; //localhost (Return the name of host server = eg: www.yourdomain.com)
    echo "<hr>";
    echo $_SERVER["SERVER_SOFTWARE"]; // Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
    echo "<hr>";
    echo $_SERVER["SERVER_PORT"]; //80
    echo "<hr>";
    echo $_SERVER["SERVER_PROTOCOL"]; //HTTP/1.1
    echo "<hr>";
    echo $_SERVER["SERVER_SIGNATURE"]; // Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80
    echo "<hr>";
    echo $_SERVER["REQUEST_METHOD"]; //GET
    echo "<hr>";
    echo $_SERVER["REMOTE_ADDR"]; // ::1
    echo "<hr>";
    echo $_SERVER["SCRIPT_FILENAME"]; // C:/xampp/htdocs/php(25-8-2025)/l12superglobalvariables.php
    echo "<hr>";
    echo $_SERVER["SCRIPT_NAME"]; ///php(25-8-2025)/l12superglobalvariables.php
    echo "<hr>";
    echo $_SERVER["QUERY_STRING"]; //http://localhost/php(25-8-2025)/l12superglobalvariables.php?aungaung
    echo "<hr>";
?>