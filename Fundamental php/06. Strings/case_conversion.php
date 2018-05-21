<?php

/*

1. strtoupper() function converts lowercase lettrs to uppercase letters

2. strtolower() function converts upercase lettrs to lowercase letters

3. ucfirst() function converts the first character of the first word of a string to uppercase

4. ucwords() function converts the first character of each word of a string to uppercase 

*/

$text = "hello world";

echo strtoupper($text); // output: HELLO WORLD

echo strtolower($text); // output: hello world

echo ucfirst($text); // output: Hello world

echo ucwords($text); // output: Hello World

?>