<?php

/*

1. PHP supports the following data types:
    a) String
    b) Integer
    c) Float (floating point numbers - also called double)
    d) Boolean
    e) Array
    f) Object
    g) NULL

2. A variable that has no value assigned to it is called NULL.

*/

// null

$x;
var_dump($x); // output: NULL

// string

$y = '';
var_dump($y); // output: string(0)""

// array

$student = array('rony','jony','alim');
var_dump($student); // output: array(3) { [0]=> string(4) "rony" [1]=> string(4) "jony" [2]=> string(4) "alim" } 

?>