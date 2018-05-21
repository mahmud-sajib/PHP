<?php

/*

1. 'echo' has no return value while 'print' has a return value of 1 so it can be used in expressions. 

2. 'echo' can take multiple parameters (although such usage is rare) while 'print' can take one argument. echo is marginally faster than print.

*/

//print

$a = print("sajib");
var_dump($a); // sajib int(1) 
echo "</br>";

//echo 
$b = "rony";
var_dump($b); // string(4) "rony"
echo "</br>";

//echo with multiple parameter

echo "This " , "is " , " a", " multiple", " parameter", " text";
echo "</br>";

//print with single parameter
print "This is single parameter text";

?>