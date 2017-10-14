<?php

/*

1. Interface are declared with this syntax: inteface ClassName

2. It can only contain Public Methods & can't contain Variables(Properties).

3. A Child Class can have more than one Interfaces.

4. Syntax for implemeting Interface(s) to a Child Class: class ClassName implements interface1, interface2

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
echo $volvoCar->getColor();

?>
