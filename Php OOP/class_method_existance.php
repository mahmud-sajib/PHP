<?php

// We use class_exists("ClassName") function to check if a class exists or not

// We use method_exists("object",methodName) function to check if a method exists or not

class Student{

	public function details(){
		echo "Class & Method exists </br>";
	}

}

if(class_exists("Student")){

    $studentOne = new Student();
    
    if (method_exists($studentOne, "details")) {
    	$studentOne->details();	
    } else {
    	echo "Method doesn't exist";
    }
    

} else {
	echo "Class doesn't exist";
}

?>