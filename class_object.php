

<?php

// Basic structure

class Person {

public $name = "Arif";

public function hello(){

	echo "Hi, there! ";

}

}

$personOne = new Person;

echo $personOne->name;

echo "</br>";

echo $personOne->hello();

echo "</br>";

// Setting propertie's value through object

class Student {

public $name;

public function hello(){

	echo "Hi, there!" ;

}

}

$studentOne = new Student;

echo $studentOne->name = "Kabir";

echo "</br>";

// Using $this to access properties

class Guest {

public $name;

public function greeting(){
	echo "Hello " . $this->name . "</br>" ;
}

}

$guestOne = new Guest;

$guestTwo = new Guest;

$guestOne->name = "Mohsin";

$guestTwo->name = "Sajib"; 

$guestOne->greeting();

$guestTwo->greeting(); 

// Passing argument to a function(method) via object and accessing it

class Player {

	public $name; 

	public $age;

	public function playerAge($value){
		echo $this->name. " age is " . $this->age=$value . "</br>";
	}

} 

$playerOne = new Player;
$playerTwo = new Player;

$playerOne->name = "Ronaldo";
$playerTwo->name = "Messi";

$playerOne->playerAge("30");
$playerTwo->playerAge("26");

?>
