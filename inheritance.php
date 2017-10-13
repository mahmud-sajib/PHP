<?php

/*

1. We can use the Properties and Methods of a Parent class in a Child class through inheritance.

2. To extend a Child to a Parent class we write this syntax:- class ChildClass extends ParentClass

*/

// Child class inheriting Property & Method from Parent class

class University  {

public $name;
public $department = "Computer Science";

public function __construct($studentName){
	$this->name = $studentName;
}
public function hello(){
	echo "This student's name is " .$this->name. " and department is " .$this->department ;
}

}

class Student extends University{
 
}

$studentOne = new Student("Hasnat Ali");

$studentOne->hello();

echo "</br>";

// Child class inheriting Property & Method from Parent class & it's own class

class Person{

	public $name;
	public function __construct($pupilName){
		$this->name = $pupilName;
	}

}

class Female extends Person{

	public $id = 103254;
	public function studentEntity(){
		echo "Student's name is " .$this->name. " and id is " .$this->id;
	}

} 


$femaleStudent = new Female("Isabella");

$femaleStudent->studentEntity();

echo "</br>";

// Overriding property and method of Parent class by Child Class

class Club {

	public $name = "Barcelona";
	public function __construct($clubName){
		$this->name = $clubName;
	}
	public function clubName(){
		echo "This is " . $this->name;
	}

}

class Team extends Club{

	public function clubName(){
		echo "Welcome ". $this->name;
	}

}


$clubOne = new Team("ManUtd");
$clubOne-> clubName();

?>
	
