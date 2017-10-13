<?php

/* 
A destructor is called when the object is destroyed. It's loaded at the last of any script. The __destruct() method is automatically invoked just before the object is removed from memory with unset($object) . This method is useful when we want to perform any last-minute actions (such as saving or printing some data when it is deleted).
*/  

class Animal
{
    public $name;
    
    public function __construct($animalName)
    {
    	$this->name = $animalName;
        echo $this->name. " has born </br>";
    }

    public function __destruct()
    {
    	echo $this->name. " has died";
    }
}

$animal = new Animal("Rabbit");

?>