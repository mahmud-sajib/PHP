<?php

/*

1. To create a constant, we use the define() function.

2. Constants are like variables except that once the value cannot be changed later
and we can't use $ sign before the constant name.

3. Unlike variables, constants are automatically global across the entire script.

*/

define("country", "Vutan");

function planet(){
	return country;
}

echo planet(); // output: Vutan

?>