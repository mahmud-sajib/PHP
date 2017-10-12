<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

/*

1. Interface are delared with the keyword:- inteface
2. It can only contain Public Methods & can't contain Variables.
3. A child Class can have more than one Interfaces.

Source: http://phpenthusiast.com/object-oriented-php-tutorials/interfaces

*/

interface Car {

	public function setModel($modelName);
	public function getModel();

}

interface Color {

	public function setColor($colorName);
	public function getColor();

}

class Volvo implements Car,Color{

	private $model;
	private $color;

	public function setModel($modelName){
		$this->model = $modelName;
	}

	public function getModel(){
		return $this->model;
	}

	public function setColor($colorName){
		$this->color = $colorName;
	}

	public function getColor(){
		return $this->color;
	}

}

$volvoCar = new Volvo();

$volvoCar->setModel("xcorolla");

$volvoCar->setColor("red");

echo $volvoCar->getModel();

echo "</br>";

echo $volvoCar->getColor();

?>
	
</body>
</html>