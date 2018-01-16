<?php

/*

1. There are 3 types of access modifiers: Public, Private & Protected

2. We can show Public properties in : Parent Class, Child Class and Outside of a Class

3. We can show Private properties only in : Parent Class. They can't be accessed from Child Class or Outside of a Class.

4. We can show Protected properties in : Parent Class and Child Class. They can't be accessed Outside of a Class.

*/

class Varsity{

	public $name;
	private $department;
	protected $age;

	public function __construct($studentName,$studentDept,$studentAge){

		$this->name = $studentName; 
		$this->department = $studentDept;
	    $this->age = $studentAge;

	    echo "Printed in class : " .$this->name. " " .$this->department. " " .$this->age ;
	    echo "</br>";

	}

}

class Student extends Varsity{

	public function studentEntity(){
		echo "Printed in Child class: " . $this->name . " " . $this->department . " " . $this->age;
		echo "</br>";
	}
}

$studentOne = new Student("Lubaba", "Dentist", "24");

$studentOne->studentEntity();

echo "Printed outside class: </br>";
echo "Name is " . $studentOne->name;
echo "</br>";
echo "Department is " . $studentOne->department;
echo "</br>";
echo "Age is " . $studentOne->age;

?>
