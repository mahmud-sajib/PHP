<?php

//array_intersect() function ignores KEY & Prints the matching VALUES of associative array that are present in every array. 

$col1 = array(
	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(
	'e' => 'red' , 
	'f' => 'blue' , 
	'c' => 'black' ,
	'd' => 'grey'
);

$intcolor = array_intersect($col1, $col2);

echo "<pre>";

print_r($intcolor); // output: Array( [a] => red [b] => blue )

echo "</pre>";

//array_intersect_assoc() function Prints the matching KEY=>VALUE pair of associative array only if it finds the exact same KEY=>VALUE pair in every array.

$col1 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(

	'a' => 'red' , 
	'f' => 'blue' , 
	'c' => 'black' ,
	'd' => 'grey'
);

$intassoccolor = array_intersect_assoc($col1, $col2);

echo "<pre>";

print_r($intassoccolor); // output: Array( [a] => red )

echo "</pre>";

//array_intersect_key() function ignores VALUE & Prints the matching KEYS of associative array that are present in every array.

$col1 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(

	'f' => 'red' , 
	'b' => 'blue' , 
	'c' => 'black' ,
	'd' => 'grey'
);

$intkeycolor = array_intersect_key($col1, $col2);

echo "<pre>";

print_r($intkeycolor); // output: Array ( [b] => blue [d] => yellow )

echo "</pre>";

?>