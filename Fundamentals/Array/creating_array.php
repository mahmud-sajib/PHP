<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

//array

$players = array("Ronaldo", "Messi", "Neymar");
$numPlayer = count($players);

for ($i=0; $i < $numPlayer ; $i++) { 
	echo $players[$i] . "</br>";
}

//associative array

$soccer = array('Oscar' => 'Chelsea' , 'Rooney' => 'ManUtd' , 'Marcelo' => 'Real Madrid' );

foreach ($soccer as $key => $value) {
	echo "key: " . $key . "Value: " . $value . "</br>";
}

//multidimentional array

$footballer = array(
              array('Raul', 25, 'oscar', 20),
              array('Rooney', 22, 'mbappe', 28),
              array('Figo', 35, 'Messi', 30)
              );

echo $footballer[0][2];


?>
	
</body>
</html>