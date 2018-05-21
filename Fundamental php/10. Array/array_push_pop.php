<?php

// The array_pop() functions deletes the last element of an array.

$arr1 = array('red', 'blue', 'green');

array_pop($arr1);

echo "<pre>";

print_r($arr1); // output: Array( [0] => red [1] => blue )

echo "</pre>";

// The array_push() functions adds an elements to the end of an array.

$arr2 = array('red', 'blue');

array_push($arr2, 'grey');

echo "<pre>";

print_r($arr2); // Array( [0] => red [1] => blue [2] => grey )

echo "</pre>";

?>