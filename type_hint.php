<?php

// array type hinting

class Calculation{
	public function myValue(array $num){

		foreach ($num as $value) {
			echo $value[0];
			echo ":";
			echo $value[1]*$value[2];
			echo "</br>";
		}

	}
}

$cal = new Calculation;
$num = array(

array('Number One',10,5),
array('Number Two',20,5),

);

$cal->myValue($num);

echo "</br>";

// object type hinting

class Person{

	public function name(){
		return "Humayun Ahmed is the author of Himu";
	}
	
}

class Book{

	public $authors;
	public function __construct(Person $person){
		$this->authors = $person->name();
		echo $this->authors;
	}

}

$authorsName = New Person;

$book = new Book($authorsName);

?>