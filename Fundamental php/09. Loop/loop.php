<?php

/*

1. The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

2. The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

*/

// while loop

$x = 1;

while ( $x <= 5 ) {
	echo "The number is: $x </br>"; // output: 1 2 3 4 5
	$x++;
}

// do...while loop

$a = 1;

do{
	echo "The number is: $a </br>"; // output: 1
	$a++;
} while ( $a <= 1);

// for loop

for ( $i=1; $i<=5; $i++) { 
	echo "We have: $i </br>"; // output: 1 2 3 4 5
}

// foreach loop

$students = array("arif","mizan", "avi"); 

foreach ($students as $pupil) {
	echo "$pupil </br>"; // output: arif, mizan, avi
}

?>