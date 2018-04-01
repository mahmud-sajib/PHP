<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_values() function returns an array containing all the values of an array. The returned array will have numeric keys, starting at 0 and increase by 1.

$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

$result = array_values($color);

echo "<pre>";

print_r($result);

echo "</pre>";

?>


	
</body>
</html>