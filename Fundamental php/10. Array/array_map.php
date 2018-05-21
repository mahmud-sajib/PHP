<?php

// The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

function myFunction($value){

$z = $value+$value;

return $z;

}

$arrayNum = array(1, 2, 3, 4, 5);

$result = array_map('myFunction', $arrayNum);

echo "<pre>";

print_r($result); // output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

echo "</pre>";

// In associative array the array_map() function sends each VALUE of an array to a user-made function, and returns an array with new VALUES, given by the user-made function.

function myFunc($strcase){
$z = strtolower($strcase);
return $z; 
}

$arr = array(
	'name' => 'ASIF',
    'varsity' => 'RUET' 
);

$res = array_map('myFunc', $arr);

echo "<pre>";

print_r($res); // Array( [name] => asif [varsity] => ruet )

echo "</pre>";

?>