<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

function myfunction($department,$name){
	echo "$name is from $department department </br>";
}

$student = array( 'Rony' => 'Math', 'Johny' => 'Physics', 'Lipi' => 'Chemistry');

array_walk($student, "myfunction");


?>


	
</body>
</html>