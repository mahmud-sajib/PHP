<?php

// The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 

$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

array_unshift($color,'grey');

echo "<pre>";

print_r($color); // Array( [0] => grey [a] => red [b] => blue [c] => green )

echo "</pre>";

?>