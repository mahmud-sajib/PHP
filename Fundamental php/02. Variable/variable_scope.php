<?php

/*

1. A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function

2. A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
N.B. We can use 'global' keyword to access a global variable within a function

*/

//local variable

function num(){
	$x=20;
	echo "Number is " . $x . "</br>"; // output: 20
}

num();

//global variable

$a = 15;

function hello(){
	global $a;
	echo "Number is " . $a; // output: 15
}

hello();

?>