<?php

/*

1. strlen() function returns the length of a string.

2. str_word_count() function counts the number of words in a string

3. strrev() function reverses a string

4. strpos() function finds the position of the first occurrence of a string inside another string

5. str_replace() function replaces some characters with some other characters in a string

*/

$x = 'hello there';

echo strlen($x); // output: 11

echo str_word_count($x); // output: 2

echo strrev($x); // output: ereht olleh

echo strpos($x, 'hello'); // output: 0

echo str_replace('there', 'me', $x); // output: hello me

?>