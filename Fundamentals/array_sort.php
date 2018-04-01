<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

//array sorting

$name = array("Karim", "Rahim", "Saleh", "Amin");

sort($name);

$length = count($name);

for ($i=0; $i<$length; $i++) { 
	echo $name[$i] . "</br>";
}

//array reverse sorting

$num = array(10,5,15,20);

rsort($num);

$length = count($num);

for ($i=0; $i<$length; $i++) { 
	echo $num[$i] . "</br>";
}

//assoc array value sorting

$age = array('Rahim' => 20 , 'John' => 15 , 'Alom' => 25);

asort($age);

foreach ($age as $key => $value) {
	echo "key = " . $key . " & value= " . $value . "</br>";
}

//assoc array key sorting

$age = array('Rahim' => 20 , 'John' => 15 , 'Alom' => 25);

ksort($age);

foreach ($age as $key => $value) {
	echo "key = " . $key . " & value= " . $value . "</br>";
}

?>
	
</body>
</html>