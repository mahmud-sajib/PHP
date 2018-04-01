<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$mystring = "Hello World";

$str = explode(" ", $mystring);

var_dump($str);

echo "</br>"; 

$myarray = array("Hey", "Man" , "!");

$arr = implode(" , ", $myarray);

var_dump($arr);


?>
	
</body>
</html>