<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$GLOBALS &amp; $_SERVER</title>
</head>
<body>

<?php

// $GLOBALS

$x = 10;
$y = 15;

function num(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
} 

num();

echo $z . '</br>';

// SERVER

echo 'Current directory: ' . $_SERVER['PHP_SELF'] . '</br>';

echo 'Current server: ' . $_SERVER['SERVER_NAME'] . '</br>';

echo 'Current browser: ' . $_SERVER['HTTP_USER_AGENT'] . '</br>';

echo 'Current server ip address: ' . $_SERVER['SERVER_ADDR'] . '</br>';





?>
	
</body>
</html>