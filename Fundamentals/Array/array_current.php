<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The current() function prints the current element of an array

// The end() function prints the last element of an array

// The next() function prints the next element of an array

// The prev() function prints the prev element of an array


$name = array("Rony", "Johny", "Shely", "Doly");

echo "<pre>";

print_r($name);

echo "</pre>";

echo "Current name: " .current($name). "</br>";

echo "Next name: " .next($name). "</br>";

echo "Ending name: " .end($name). "</br>";

echo "Previous name: " .prev($name). "</br>";

?>


	
</body>
</html>