<?php

/*

1. Static Property or Method can be declared by writing the "static" keyword before a property and method.

2. A static property can be accessed through:- self::$propertyname 

3. To access a static method within a class we don't need to instantiate an object 

4. A static method can be accessed through:- ClassName::method()  

5. :: is called "scope resolution operator".

*/

class Student  {

public static $name = "Ahmed Rubel";

public static function hello(){
	echo "Hello " . self::$name ;
}

}

Student::hello();

?>