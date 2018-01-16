<?php

/*

1. According to the Polymorphism principle, methods in different classes that do similar things should have the same method name.

2. In order to implement the polymorphism principle, we can choose between abstract classes and interfaces.

Source: http://phpenthusiast.com/object-oriented-php-tutorials/polymorphism-in-php

*/

interface Shape {
	public function calcArea();
}

class Circle implements Shape{

	private $radius;

	public function __construct($value){
		$this->radius = $value;
	}

	public function calcArea(){
		return $this->radius * $this->radius * pi();
	}

} 

class Rectangle implements Shape{

	private $height;
	private $width;

	public function __construct($figHeight,$figWidth){
		$this->height = $figHeight;
		$this->width = $figWidth;
	}

	public function calcArea(){
		return $this->height * $this->width;
	}

}

$circleArea = new Circle("5");
echo $circleArea->calcArea();

$rectangleArea = new Rectangle("5","7");
echo $rectangleArea->calcArea();


?>