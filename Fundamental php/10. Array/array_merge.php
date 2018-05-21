<?php

/*
The array_merge() function merges one or more arrays into one array. If two or more array elements have the same key, the last one overrides the others.
*/

$arr1 = array('a' => 'Ronaldo' , 'b' => 'Messi');

$arr2 = array('c' => 'Dibala' , 'b' => 'Drogba');

$res = array_merge($arr1, $arr2);

echo "<pre>";

print_r($res); // Array( [a] => Ronaldo [b] => Drogba [c] => Dibala )

echo "</pre>";

?>