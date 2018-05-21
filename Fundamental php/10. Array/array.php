<?php

/*
The count() function is used to return the length (the number of elements) of an array
*/

// looping through an array 

$x = array(5,10,15,20,30);

$length = count($x);

for ($i=0; $i<$length ; $i++) { 
	echo $x[$i]; // output: 5 10 15 20 30
}

// looping through the rows and columns of an array

$cars = array (

	array("BMW", "blue", 40),
	array("VOLVO", "black", 35),
	array("PRADO", "white", 25) 

);

for ($row=0; $row<3 ; $row++) {

	echo "<p> Row is: $row </p>";

	echo "<ul>";
	for ($col=0; $col<3 ; $col++) { 
		echo "<li>" . $cars[$row][$col] . "</li>";
	}
	echo "<ul>";

}

?>