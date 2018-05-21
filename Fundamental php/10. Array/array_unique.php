<?php

// The array_unique() function removes duplicate values from an array.

$color = array( 

	'a' => 'red', 
	'b' => 'blue', 
	'c' => 'green',
	'd' => 'blue',

	);

$result = array_unique($color);

echo "<pre>";

print_r($result); // output: Array ( [a] => red [b] => blue [c] => green )

echo "</pre>";

?>