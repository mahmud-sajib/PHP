<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_replace() function replaces the previous array elements with an new array.

$arr1 = array('red', 'blue');
$arr2 = array('green', 'purple');
$arr3 = array('white', 'black');

$res = array_replace($arr1,$arr2,$arr3);

echo "<pre>";

print_r($res);

echo "</pre>";

// In associative array The array_replace() function replaces the value of previous key with new key's value if keys are matched, assigns a index number to the value which has no key.

$ass1 = array( 'a' => 'red', 'blue');
$ass2 = array( 'a' => 'green', 'd' => 'grey');

$result = array_replace($ass1, $ass2);

echo "<pre>";

print_r($result);

echo "</pre>";

?>
	
</body>
</html>