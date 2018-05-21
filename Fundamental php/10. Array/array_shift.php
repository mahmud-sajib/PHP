<?php

// The array_shift() function removes the first element from an array, and returns the value of the removed element. If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 

$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

array_shift($color);

echo "<pre>";

print_r($color); // output: Array( [b] => blue [c] => green )

echo "</pre>";

$numcolor = array( 0 => 'red', 1 => 'blue', 2 => 'green');

array_shift($numcolor);

echo "<pre>";

print_r($numcolor); // output: Array( [0] => blue [1] => green )

echo "</pre>";

?>