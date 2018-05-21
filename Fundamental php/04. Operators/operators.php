<?php

/*

PHP divides the operators in the following groups:

    a) Arithmetic operators
    b) Assignment operators
    c) Comparison operators
    d) Increment/Decrement operators
    e) Logical operators
    f) String operators
    g) Array operators

*/

// modulus operator

$x = 10;
$x %= 5;
echo "{$x}"; // output: 0

//pre increment

$y = 5;
echo ++$y; // output: 6

//post increment

$z = 5;
echo $z++; // output: 5

//'xor' operator (True if either $x or $y is true, but not both)

$a = 5;
$b = 10;

if ($a==5 xor $b==10) {
	echo "It's true";
} else {
	echo "false"; // output: false
}

// '.=' operator'

$p = 'Hello ';
$q = 'World';
$p.=$q;

echo "$p"; // output: Hello World

?>