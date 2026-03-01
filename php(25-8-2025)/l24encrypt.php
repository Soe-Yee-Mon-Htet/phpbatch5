<?php
    // password_hash with PASSWORD_DEFAULT

    function setpassworddefault($plaintext){
        $passcode = password_hash($plaintext,PASSWORD_DEFAULT);
        echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode}";
        echo "</br>";
        echo strlen($passcode); 
    };

    setpassworddefault("password123"); //Before Encrypt = password123, After Encrypt = $2y$10$APrNFRjY.gG77uTe/lwu2OoxrEPvZJLRTpJpzrW323G.eDDC8QUFi</br>60

    // password_hash with PASSWORD_BCRYPT
    function setpassworddefault($plaintext){
        $passcode = password_hash($plaintext,PASSWORD_BCRYPT);
        echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode}";
        echo "</br>";
        echo strlen($passcode);
    };

    setpassworddefault("password123"); //Before Encrypt = password123, After Encrypt = $2y$10$y.rsgRAqED6TWRYbUH6y9ehhpMvXBxCu8kDyhBlSbsUX7QCAsedgG</br>60
    
    function passcodevertify(){
        $plaindefault = "password123";
        $encodedefault = password_hash($plaindefault,PASSWORD_DEFAULT);

        $plainbcrypt = "password123";
        $encodebcrypt = password_hash($plaindefault,PASSWORD_BCRYPT);

        // $passverify = password_verify( $plaindefault,$plainbcrypt); // Failed.
        // $passverify = password_verify( $plaindefault,$encodedefault); // "it is right."
        // $passverify = password_verify( $plaindefault,$encodebcrypt); // "it is right."

        if($passverify){
            echo "it is right.";
        } else(
            echo "Failed.";
        )

    };

    passcodevertify();




// md5(string,binary) = Message-digest
// md5(true)  => raw 16 characters binary
// md5(false) => default 32 hax number

function passcodemd5($plaintext){
    $passmd5 = md5($plaintext);
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passmd5}";
    echo "</br>";
    echo strlen($passmd5);

    $passmd5 = md5($plaintext,false); ////Before Encrypt = password12345, After Encrypt = 365d38c60c4e98ca5ca6dbc02d396e53</br>32
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passmd5}";
    echo "</br>";
    echo strlen($passmd5);

    $passmd5 = md5($plaintext,true); //Before Encrypt = password12345, After Encrypt = 6]8�N��\���-9nS</br>16
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passmd5}";
    echo "</br>";
    echo strlen($passmd5);

};

passcodemd5("password123"); //Before Encrypt = password123, After Encrypt = 482c811da5d5b4bc6d497ffa98491e38</br>32
passcodemd5("password12345"); //Before Encrypt = password12345, After Encrypt = 365d38c60c4e98ca5ca6dbc02d396e53</br>32

function passcodeverify($plainvertify){
    $getpassword = "365d38c60c4e98ca5ca6dbc02d396e53";

    if($getpassword === md5($plainvertify)){
        echo "OKi , it is default.";
    }elseif($getpassword === md5($plainvertify,true)){
        echo "OKi , it is md5 by true.";
    }else{
        echo "It doesn't match.";
    };

    // $passmd5 = md5($plainvertify);
    // echo "Before Encrypt = {$plainvertify}, After Encrypt = {$passmd5}";
    // echo "</br>";
    // echo strlen($passmd5);
};

passcodeverify("password12345"); 


?>