<?php

/*
The array_combine() function takes KEY from one array and VALUE from another array and creates a brand new array by combining them
*/

$students = array('Mahmud', 'Arif', 'Razob');
$dept = array('CSE', 'EEE', 'MEC');

echo "<pre>";
print_r(array_combine($students,$dept)); // output: Array( [Mahmud]=>CSE [Arif]=>EEE [Razob]=>MEC )
echo "</pre>";

?>