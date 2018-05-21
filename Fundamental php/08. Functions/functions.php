<?php

/*

1. We can set default parameter to a function. If we call the function without arguments it takes the default value as argument.

*/

// regular function

function color($colorname){
    echo "Color is: $colorname"; // output: Color is: black
}

color("black");

// function with default parameter

function sports($sportsname="cricket"){
    echo "Sports is: $sportsname"; // output: Sports is: cricket 
}

sports();

// function with return statement

function sum($x, $y){
   $z = $x + $y;
   return $z;
}

echo "The result is " . sum(5,10); // output: The result is 15

?>