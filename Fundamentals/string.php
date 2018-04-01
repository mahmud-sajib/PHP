<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$x = 'hello there';

echo strlen($x) . "</br>";

echo str_word_count($x) . "</br>";

echo strrev($x) . "</br>";

echo strpos($x, 'hello') . "</br>";

echo str_replace('there', 'me', $x) . "</br>";


?>
	
</body>
</html>