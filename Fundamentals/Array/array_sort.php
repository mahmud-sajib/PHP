<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The asort() function returns values in ascending order
$student = array( 'Rony' => 20, 'Johny' => 15, 'Lipi' => 30);

asort($student);

foreach ($student as $name => $age) {
	echo "Name is " .$name. " & age " .$age. "</br>";
}

echo "</br>";

// The arsort() function returns values in descending order

$student = array( 'Rony' => 20, 'Johny' => 15, 'Lipi' => 30);

arsort($student);

foreach ($student as $name => $age) {
	echo "Name is " .$name. " & age " .$age. "</br>";
}

echo "</br>";

// The ksort() function returns keys in ascending order

$student = array( 'Rony' => 20, 'Johny' => 15, 'Lipi' => 30);

ksort($student);

foreach ($student as $name => $age) {
	echo "Name is " .$name. " & age " .$age. "</br>";
}

echo "</br>";

// The krsort() function returns keys in descending order

$student = array( 'Rony' => 20, 'Johny' => 15, 'Lipi' => 30);

krsort($student);

foreach ($student as $name => $age) {
	echo "Name is " .$name. " & age " .$age. "</br>";
}

echo "</br>";

// The key() function prints the current element of an array

$name = array("Rony", "Johny", "Shely", "Doly");

echo "Current index is: " .key($name) ;

?>


	
</body>
</html>