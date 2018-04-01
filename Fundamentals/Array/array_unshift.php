<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 

$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

array_unshift($color,'grey');

echo "<pre>";

print_r($color);

echo "</pre>";

?>


	
</body>
</html>