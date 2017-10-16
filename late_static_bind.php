<?php

/*

1. Late static binding helps us to determine in which static classes a method call should be bind correctly at run time.

2. The synatx is: static::$propertyName So when we use

3. 'self' keyword can't determine in which class the method call should be bind & that's why we use 'static' instead and the process is know as late static binding.

*/

// reference: https://codeinphp.github.io/post/late-static-binding-in-php/

// reference: https://www.youtube.com/watch?v=MxRrCV_3VSQ

class Animal {
    protected static $name = 'Animal';

    public static function getName() {
        return static::$name;
    }
}

class Cat extends Animal {
    protected static $name = 'Cat';
}

echo Animal::getName(); 
echo "</br>";
echo Cat::getName(); 



?>
