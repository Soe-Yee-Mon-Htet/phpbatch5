<?php






// max(number)
echo max(2,4,20,6,8,10); //20
echo max(2,4,"100","-40",8,10); //100


// min(number)
echo min(2,4,20,6,8,10); //2
echo min(2,4,"100","-40",8,10); //-40

// pow(base,exponent)
echo pow(2,3); //8
echo pow(4,3); //64


// log(number,base) divide
echo log(10,2); //3.3219280948874
echo log(3,4); //0.79248125036058

// sqrt(number, base)
echo sqrt(5); //2.2360679774998
echo sqrt(-4); //NAN

// rand() == random
echo rand(); //831348203 == 9

// getrandmax() 
echo getrandmax(); //2147483647 == 10

// rand(min,max)
echo rand(1000,10000);

$users = ["aung","kyaw","zaw","nu","su","hla"];
echo $users[rand(0,5)];

// microtime()
                    // 0.1s         1s
// microtime(parameter)
echo microtime(); //0.09982200 1756818743

// echo microtime(true);

// uniqid()
echo uniqid(); //68b6efa586f0d

// number_format(number,decimals,decimal-separator,thousands-separator)
echo number_format(1500,2); //1,500.00
echo number_format(1250000,2); //1,250,000.00
echo number_format(5000,2,"-"); //5,000-00
echo number_format(5000000,2,".","-"); //5-000-000.00










?>