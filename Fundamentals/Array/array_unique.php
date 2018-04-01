<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

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

print_r($result);

echo "</pre>";

?>


	
</body>
</html>