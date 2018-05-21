<?php

/*
The array_multisort() functions prints the value of array in ASCENDING order
*/

$arr1 = array('red', 'blue');
$arr2 = array('Tiger', 'lion');

array_multisort($arr1,$arr2);

echo "<pre>";
print_r($arr1); // Array([0] => blue [1] => red)
echo "</pre>";

echo "<pre>";
print_r($arr2); // Array([0] => lion [1] => Tiger)
echo "</pre>";

?>