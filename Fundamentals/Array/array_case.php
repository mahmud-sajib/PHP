<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

//Uppercase key

$name = array('Abdul' => 20 , 'Rahim' => 50, 'Samim' => 30);

echo "<pre>";

print_r(array_change_key_case($name,CASE_UPPER));

echo "</pre>";

//Lowercase key

$name = array('Abdul' => 20 , 'Rahim' => 50, 'Samim' => 30);

echo "<pre>";

print_r(array_change_key_case($name,CASE_LOWER));

echo "</pre>";

?>
	
</body>
</html>