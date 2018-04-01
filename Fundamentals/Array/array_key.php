<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

// Check if the key exists in associative array 

$players = array('Ronaldo' => 30 , 'Messi' => 28);

if (array_key_exists('Ronaldo', $players)) {
	echo "Key exists";
} else {
	echo "Key doesn't exist";
}

echo "</br>";

// Check if the key exists in index array 

$players = array('Ronaldo', 'Messi');

if (array_key_exists(2, $players)) {
	echo "Key exists";
} else {
	echo "Key doesn't exist";
}

// Prints the KEYS of an array 

$car = array(
	'Volvo' => 'Red',
	'jaguar' => 'Green',
	'Macedez' => 'Yellow' 
);

$carkey = array_keys($car);

echo "<pre>";

print_r($carkey);

echo "</pre>";

// Prints the specific KEY of an array 

$car = array(
	'Volvo' => 'Red',
	'jaguar' => 'Green',
	'Macedez' => 'Yellow' 
);

$carspeckey = array_keys($car, 'Green');

echo "<pre>";

print_r($carspeckey);

echo "</pre>";


?>


</body>
</html>