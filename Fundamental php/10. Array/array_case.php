<?php

/*
The array_change_key_case() function changes all keys in an array to lowercase or uppercase.
*/

//Uppercase key

$name = array('Abdul' => 20 , 'Rahim' => 50);

echo "<pre>";
print_r(array_change_key_case($name,CASE_UPPER)); // output: Array( [ABDUL] => 20 [RAHIM] => 50 )
echo "</pre>";

//Lowercase key

$name = array('Abdul' => 20 , 'Rahim' => 50);

echo "<pre>";
print_r(array_change_key_case($name,CASE_LOWER)); // output: Array( [abdul] => 20 [rahim] => 50 )
echo "</pre>";

?>