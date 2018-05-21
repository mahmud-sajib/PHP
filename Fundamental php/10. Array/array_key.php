<?php

/*

1. array_key_exists() checks if the key exist in the array 
2. array_keys() prints the KEYS of an array as value and assign 0 based index to them

*/

// Check if the key exists in associative array 

$players = array('Ronaldo' => 30 , 'Messi' => 28);

if (array_key_exists('Ronaldo', $players)) {
	echo "Key exists"; // output: Key exists
} else {
	echo "Key doesn't exist";
}

echo "</br>";

// Check if the key exists in index array 

$players = array('Ronaldo', 'Messi');

if (array_key_exists(2, $players)) {
	echo "Key exists";
} else {
	echo "Key doesn't exist"; // output: Key doesn't exist
}

// Prints the KEYS of an array as value and assign 0 based index to them

$car = array(
	'Volvo' => 'Red',
	'jaguar' => 'Green',
	'Macedez' => 'Yellow' 
);

$carkey = array_keys($car);

echo "<pre>";

print_r($carkey); // output: Array([0] => Volvo [1] => jaguar [2] => Macedez)

echo "</pre>";

// Prints the specific KEY of an array as value and assign 0 based index to them

$car = array(
	'Volvo' => 'Red',
	'jaguar' => 'Green',
	'Macedez' => 'Yellow' 
);

$carspeckey = array_keys($car, 'Green');

echo "<pre>";

print_r($carspeckey); // // output: Array([0] => jaguar)

echo "</pre>";

?>