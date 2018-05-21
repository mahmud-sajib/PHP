<?php

/*

1. array_diff() function ignores KEY & Prints the unique VALUE of first associative array only if it doesn't find the exact same VALUE in other arrays.

2. array_diff_key() function ignores VALUE & Prints the unique KEY of first associative array only if it doesn't find the exact same KEY in other arrays. 

3. array_diff_assoc() function Prints the unique KEY=>VALUE pair of first associative array only if it does't find the exact same KEY=>VALUE pair in other arrays. 

*/

// array_diff()

$col1 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'c' => 'black' ,
	'd' => 'grey'
);

$difcolor = array_diff($col1, $col2);

echo "<pre>";
print_r($difcolor); // output: Array ( [e] => green [d] => yellow )
echo "</pre>";


//array_diff_key()

$col1 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'c' => 'green' ,
	'd' => 'grey'
);

$col3 = array(

	'g' => 'red' , 
	'h' => 'blue' , 
	'i' => 'black' ,
	'j' => 'grey'
);

$difkey = array_diff_key($col1, $col2, $col3);

echo "<pre>";
print_r($difkey); // output: Array ([e] => green)
echo "</pre>";

//array_diff_assoc()

$col1 = array(

	'a' => 'red' , 
	'b' => 'blue' , 
	'e' => 'green',
	'd' => 'yellow' 
);

$col2 = array(

	'f' => 'red' , 
	'e' => 'blue' , 
	'g' => 'black' ,
	'd' => 'yellow'
);

$difasoc = array_diff_assoc($col1, $col2);

echo "<pre>";
print_r($difasoc); // output: Array ( [a] => red [b] => blue [e] => green )
echo "</pre>";

?>