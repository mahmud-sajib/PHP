<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_pad() functions inserts a specified number of elements, with a specified value, to an array. If the number is POSITIVE, the element is inserted as the last indexes. If the number is negative, the element is inserted as the first indexes.

$arr1 = array('red', 'blue');

$result = array_pad($arr1, 5, 'green');

echo "<pre>";

print_r($result);

echo "</pre>";

$arr2 = array('red', 'blue');

$res = array_pad($arr2, -5, 'green');

echo "<pre>";

print_r($res);

echo "</pre>";

?>
	
</body>
</html>