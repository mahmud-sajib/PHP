<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// Print column value from multidimentional associative array

$students = array(

	        array( 
	         'id' => 100,
	         'Firstname' => 'Mahmud',
	         'Lastname' => 'Islam' 
	        ),

	        array( 
	         'id' => 200,
	         'Firstname' => 'Fahad',
	         'Lastname' => 'Hoq' 
	        ),

	        array( 
	         'id' => 300,
	         'Firstname' => 'Amrin',
	         'Lastname' => 'Rahman' 
	        )

	);

$firstname = array_column($students, 'Firstname');


echo "<pre>";

print_r($firstname);

echo "</pre>";

$identity = array_column($students, 'Firstname', 'Lastname');


echo "<pre>";

print_r($identity);

echo "</pre>";


?>
	
</body>
</html>