<?php

/*

1. $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods). 

2. PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

3. $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

*/

// $GLOBALS

$x = 10;
$y = 15;

function num(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
} 

num();

echo $z . '</br>'; // output: 25

// $_SERVER['PHP_SELF'] returns the filename of the currently executing script
echo 'Current directory: ' . $_SERVER['PHP_SELF'] . '</br>';

// $_SERVER['SERVER_NAME'] returns the name of the host server
echo 'Current server: ' . $_SERVER['SERVER_NAME'] . '</br>';

// $_SERVER['HTTP_USER_AGENT'] returns the browser details the script is using
echo 'Current browser: ' . $_SERVER['HTTP_USER_AGENT'] . '</br>';

// $_SERVER['SERVER_ADDR'] returns the IP address of the host server
echo 'Current server ip address: ' . $_SERVER['SERVER_ADDR'] . '</br>';

?>