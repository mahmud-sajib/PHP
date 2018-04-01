<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

// The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

function myFunction($value){

$z = $value+$value;

return $z;

}

$arrayNum = array(1, 2, 3, 4, 5);

$result = array_map('myFunction', $arrayNum);

echo "<pre>";

print_r($result);

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

print_r($res);

echo "</pre>";

?>


</body>
</html>