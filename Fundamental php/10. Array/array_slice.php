<?php

// The array_slice() function Start the slice from the specified index number's element, and return the rest of the elements in the array

$color1 = array( 'red', 'blue','green', 'yellow', 'white');

$result1 = array_slice($color1, 2); 

echo "<pre>";

print_r($result1); // output: Array( [0] => green [1] => yellow [2] => white )

echo "</pre>";

// The array_slice() function Start the slice from the second array element, and return only two elements

$color2 = array( 'red', 'blue','green', 'yellow', 'white');

$result2 = array_slice($color2, 1, 2); 

echo "<pre>";

print_r($result2); // output: Array( [0] => blue [1] => green )

echo "</pre>";

// The array_slice() function when given a negative parameter, counts the element from right to left and slice according to the specified number.

$color3 = array( 'red', 'blue','green', 'yellow', 'white','grey');

$result3 = array_slice($color3, -6, 2); 

echo "<pre>";

print_r($result3); // output: Array( [0] => red [1] => blue )

echo "</pre>";

?>