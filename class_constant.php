<?php

/*

1. In OOP we write the keyword "const" to define a constant and then write the constant name in CAPITAL WORD.

2. Constant is by default public and they don't need access modifiers.

2. Unlike properties constants once declared can never be changed

3. The Constant can be accessed through this syntax:- ClassName::CONSTANT NAME  

4. To access a constant we use this procedure :- ClassName::ConstantName

*/

class Person  {

const NAME = "Rony";

public function hello(){
	echo "Hi " .Person::NAME ;
}

}

$personOne = new Person;
$personOne->hello();

?>
	
