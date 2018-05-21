<?php

/*
array_count_values() function counts how many times an element is present in the array
*/

$students = array('Mahmud', 'Arif', 'Razob', 'Arif', 'Arif', 'Arif',  'Razob',  'Razob',  'Razob',  'Razob', 'Mahmud', 'Mahmud');

echo "<pre>";

print_r(array_count_values($students)); // output: Array( [Mahmud] => 3 [Arif] => 4 [Razob] => 5 )

echo "</pre>";

?>