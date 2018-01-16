<?php

/*

1. We declare abstract Class & Methods using the 'abstract' keyword.

2. An abstract class is a class that has at least one abstract method. 

3. Abstract class can have non abstract method.

3. Abstract methods can only have method name and arguments, and no other code. 

4. Thus, we cannot create objects out of abstract classes. 

5. Instead, we need to create child classes then add the code into the bodies of the methods, and use these child classes to create objects. 

Source: http://phpenthusiast.com/object-oriented-php-tutorials/abstract-classes-and-methods

*/

abstract class Car{
	
	protected $tankValue;

	public function setTankValue($value){
		$this->tankValue = $value;
	}

	abstract public function calcMiles();

}

class Toyota extends Car {
	
	public function calcMiles(){
		return $this->tankValue*20;
	}

}

class Volvo extends Car {
	
	public function calcMiles(){
		return $this->tankValue*30;
	}

}

$toyotaCar = new Toyota;
$volvoCar = new Volvo;

$toyotaCar->setTankValue("10");
$volvoCar->setTankValue("10");

echo $toyotaCar->calcMiles();
echo $volvoCar->calcMiles();

?>