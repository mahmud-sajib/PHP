<?php

/*

1. The explode() function breaks a string into an array.

2. The implode() function returns a string from the elements of an array.

*/

// explode

$str = "Hello world. It's a beautiful day";
print_r(explode(" ", $str)); 
// output: Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day )

echo "</br>"; 

// implode
$arr = array('Hello','World','Beautiful','Day');
echo implode("|", $arr); // output: Hello|World|Beautiful|Day

?>