<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_multisort() functions prints the value of first array in ASCENDING order and the second array in DESCENDING order.

$arr1 = array('red', 'blue');
$arr2 = array('Tiger', 'lion');

array_multisort($arr1,$arr2);

echo "<pre>";

print_r($arr1);

echo "</pre>";

echo "<pre>";

print_r($arr2);

echo "</pre>";

?>
	
</body>
</html>