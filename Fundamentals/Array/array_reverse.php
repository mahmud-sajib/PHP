<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_reverse() function returns an array in the reverse order. 


$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

$result = array_reverse($color);

echo "<pre>";

print_r($result);

echo "</pre>";

?>
	
</body>
</html>