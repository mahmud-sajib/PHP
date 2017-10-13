<?php

/* 
While using a constructor method, we don't have to access the method through objects to do some actions. We just instantiate the object. Meanwhile, In a typical method we have to access the method through objects to do some actions. 
*/

// Basic Structure of construct method

class Person{
	
public $name;
public function __construct(){
	echo "Hello I created a construcr method </br>";
}

}

$personOne = new Person;

// Setting the arguments of constructor method directly to the object instance

class Player{

	public $name;
	public $age;
	public function __construct($playerName,$playerAge){
		$this->name = $playerName;
		$this->age = $playerAge;
		echo "Player's name is " .$this->name. " and age is " .$this->age ;
	}

}

$palyerOne = new Player("Salman", "30");

?>
