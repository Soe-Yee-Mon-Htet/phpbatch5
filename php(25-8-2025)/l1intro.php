<?php

echo "ABC,";
echo 'BCD,';

echo ("CDE,");
echo ("FGH,");

echo "ABC,","DEF,";
echo "ABC,",'DEF,';

echo "EFG,","ABC,",'HIJ,';
// echo ( "EFG,","ABC,",'HIJ,'); //error

print "abc,";
print 'def,';

// print "abc","def"; // error

//print ("abc","def"); //

echo 500; 
echo "500"; 
// echo ("5","6"); //error

echo "2.7"; 
echo "<br/>";
echo true; //1
echo false; // empty
echo null; // empty

// Special Escape Character (\)
echo "He's my brother";
echo 'She\'s my sister';

print "He's my brother";
print 'She\'s my sister';

echo 'He\'s my brother , he\'s a doctor';
print 'He\'s my brother , he\'s a doctor';

echo "He\"s my brother , he\"s a doctor";
print "He\"s my brother , he\"s a doctor";




echo var_dump(520);
echo var_dump(34.23);

?>