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

// The key() function returns the element key from the current internal pointer position.

$name = array("Rony", "Johny", "Shely", "Doly");

echo "Current index is: " .key($name) ; // output: Current index is: 0 

?>