<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$x = 10;

$x %= 5;

echo "{$x} </br>";

//pre increment

$y = 5;

echo ++$y . "</br>";

//post increment

$z = 5;

echo $z++ . "</br>";

//'xor' operator

$a = 5;
$b = 10;

if ($a==5 xor $b==10) {
	echo "It's true";
} else {
	echo "false";
}

echo "</br>";

// '.=' operator'

$p = 'Hello ';
$q = 'World';
$p.=$q;

echo "$p";


?>
	
</body>
</html>