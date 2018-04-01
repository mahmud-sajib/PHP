<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_pop() functions deletes the last element of an array.

$arr1 = array('red', 'blue', 'green');

array_pop($arr1);

echo "<pre>";

print_r($arr1);

echo "</pre>";

// The array_push() functions adds elements to an array.

$arr2 = array('red', 'blue');

array_push($arr2, 'grey');

echo "<pre>";

print_r($arr2);

echo "</pre>";


?>
	
</body>
</html>