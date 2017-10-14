<?php

// We can access an undefined property's value using __get() method.

// We can access an undefined property and set it's value using __set() method.

// We can access an undefined method using __call() method.

class Student{

	public function __get($parameter){
		echo "$parameter is an undefined property but we can still access it. </br>";
	}

	public function __set($parameter,$value){
		echo "John's $parameter is $value </br>";

	}

	public function __call($parameter,$value){
		echo "We have accessed to an undefined " .$parameter. " and it's arguments are " .
		implode(", ", $value);

	}

}

$studentOne = new Student();

//calling an undefined value. We didn't assign Skyfall to a Property.

$studentOne->Skyfall;

//calling an undefined property and assigning value. We didn't declare or define country as a property.

$studentOne->country = "canada";

//calling an undefined method and passing array.

$studentOne->notExistMethod("5","10","20");

?>