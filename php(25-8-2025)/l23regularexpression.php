<?php

$string = "We are family";

// preg_match(delimiter == pattern,string);
$result = preg_match("/We are/",$string); // true = 1
$result = preg_match("%We are%",$string); // true = 1
$result = preg_match("#We are#",$string); // true = 1
$result = preg_match("/^family$/",$string); //false = 0
$result = preg_match("/We are$/",$string); //false = 0
$result = preg_match("/family$/",$string); //true = 1
$result = preg_match("/Family$/i",$string); //true = 1

$result = preg_match("/[A-Z]/",$string); // true = 1
$result = preg_match("/[a-z]/",$string); // true = 1
$result = preg_match("/[A-Z][a-z]/",$string); // true = 1
$result = preg_match("/[A-Z]|[a-z]/",$string); // true = 1
$result = preg_match("/[A-Z]+[a-z]/",$string); // true = 1

$result = preg_match("/[1-5]/",$string);// false = 0
$result = preg_match("/^[1-5]/",$string);// false = 0
$result = preg_match("/[^1-5]/",$string);// true = 1

$result = preg_match("/^[a-z]/",$string); // false = 0
$result = preg_match("/^[A-Z]/",$string); // true = 1

$result = preg_match("/[a-z]$/",$string); //  true = 1
$result = preg_match("/[^a-z]/",$string); //  false = 0

$string = "admin@gmail.com";
$result = preg_match("/a\w/",$string);
$result = preg_match("/^[a-z,A-Z]+@[a-z]+.\w{3}/",$string);

echo $result;

// preg_replace(pattern,replacement,string)
$string = "I love PHP";

$result = preg_replace("/php/","java",$string); // I love PHP
$result = preg_replace("/php/i","java",$string); // I love java
$result = preg_replace("/\s/","",$string); // IlovePHP

echo $result;

// Bracket Expression
$string = "admin1230@gmail .com";
$result = preg_replace("/\s/","",$string); //admin1230@gmail.com

$result = preg_replace("/[[:space:]]/","",$string); //admin1230@gmail.com
$result = preg_replace("/[[:alpha:]]/","x",$string); //xxxxx1230@xxxxx.xxx
$result = preg_replace("/[[:digit:]]/","x",$string); //adminxxxx@gmail.com
$result = preg_replace("/[[:alnum:]]/","x",$string); //xxxxxxxxx@xxxxx.xxx
$result = preg_replace("/[[:punctuation:]]/","x",$string); //admin1230xgmail xcom
$result = preg_replace("/[[:lower:]]/","x",$string); //xxxxx1230@xxxxx .xxx

$string = "Admin1230@gmail .Com";
$result = preg_replace("/[[:upper:]]/","x",$string); //xdmin1230@gmail .xom

$string = "Are you ready to learn PHP framework?";
$result = preg_replace(["/PHP/","/Framework/i"],["java","libraries"],$string);

$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_replace(["/[0-9]/"],["x"],$string);
$result = preg_replace(["/[0-9]+/"],["x"],$string);

                            // no limit = 0 (or Null)
// preg_split(pattern,string,limit,flags)
$string = "My lucky number is 007";

$result = preg_split("/\s/",$string,3);

echo $result; //error
echo "<pre>". print_r($result) . "</pre>";
echo $result[4];

$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_split("/[\s]/",$string,3); // same 
$result = preg_split("/\s,/",$string,3); //" ",
$result = preg_split("/[\s,]/",$string);
$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string); // including " "
$result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY); // each word
echo "<pre>". print_r($result) . "</pre>";

// preg_quote(string,delimiter)
$string = "He\'s my father.";
$result = preg_quote($string,"o");
echo $result;

// preg_match_all(pattern,string,deliminiter)
$string = "Winning Nnumber are 227-000 & 002-777 , but my ticket number is 007-222";
preg_match_all("/.\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/.\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
echo $result; // error
echo "<pre>". print_r($result) . "</pre>";

// lookahead & lookbehind
//(?=) positive lookahead (or) Regex lookahead = right hand side
// (?<=) positive lookbehind (or) Regex lookbehind = left hand side

//(?!) negative lookahead (or) Regex lookahead = left
// (?<!) negative lookbehind (or) Regex lookbehind = right

$string = "aungkyaw@cisco.com";
$result = preg_match("/@(?=cisco)/",$string); //true
$result = preg_match("/(?<=@)cisco/",$string); //true
$result = preg_match("/cisco(?<=@)/",$string); // false

$result = preg_match("/@(?!cisco)/",$string); //false
$result = preg_match("/(?<!@)cisco/",$string); //false
echo $result;


?>

<!-- 
    $ must be in end (case sensitive);
    ^ caret or cicumflex, shift + 6 must be start. (case sensitive)
    delimiters => / ^ % + !

    i (no case sensitive)
    [] range a-z A-Z 0-5
    m+ must contain at least m and more
    m* can contain b or not and more === m? 
    m(nth) contain place m as per nth and more
    m(nth,nth) contain place m as per nth and more
    m(nth,) contain place m as per nth and more

    \s space
    \d digit
    \D no digit
    \w word [ a-z ][A-Z] [0-9]
    \W any word @#$*..
    . any character
    () this
    + must 
    * can

    p(hp)*m can contain hp
    p(hp)+ must be hp

    [[:space:]] is space
    [[:alpha:]] is alphabetic
    [[:digit:]] is digit
    [[:alnum:]] is alphanumeric
    [[:punct:]] is punctuation
    [[:lower:]] is lower-case
    [[:upper:]] is upper-case




    not a to z , but contain other "space" and "number"
    $result = preg_match("/[^a-z]/",$string);






























    OS
1   Windows
    Xampp       apache/php/mysql/filezila/mailserver
    wamp        apache/php/mysql/filezila/mailserver  
        
        windows system 32x86 / 64
        windows version 7 10 11
        application

2   Linux
    lamp        apache/php/mysql/filezila/mailserver 
    
    cpanel

    wordpress   
    wix






-->