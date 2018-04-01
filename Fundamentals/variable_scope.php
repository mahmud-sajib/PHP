<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


//local variable

function num(){
	$x=20;
	echo "Number is " . $x . "</br>";
}

num();

//global variable

$a = 15;

function hello(){
	global $a;
	echo "Number is " . $a;
}

hello();

?>
	
</body>
</html>