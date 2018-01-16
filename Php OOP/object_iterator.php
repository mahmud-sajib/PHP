<?php

/*

We can access private and protected property through object iteration 

We have to create an object instance and access the Method of that Class to implement the iteration 

*/ 

class Person{

	public $name = "Ahsan";
	public $age = 25;
	public $dept = "Maths";

	private $city = "Georgia";
	protected $hobby = "Blogging";

	public function iteration()
	{
		echo "Inside Class";
		foreach ($this as $key => $value) 
		{
		echo "<pre>";
		echo "$key : $value";
		echo "</pre>";
	    }
	}

}

$personOne = new Person;

echo "Outside Class";
foreach ($personOne as $key => $value) 
{
	echo "<pre>";
	echo "$key : $value";
	echo "</pre>";
}

// creatring object instance and accessing the method

$personOne->iteration();

?>