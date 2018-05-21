<?php

/*
The array_column() function returns the values from a single column.
*/

// a multidimentional associative array

$students = array(

    array( 
     'id' => 100,
     'Firstname' => 'Mahmud',
     'Lastname' => 'Islam' 
    ),

    array( 
     'id' => 200,
     'Firstname' => 'Fahad',
     'Lastname' => 'Hoq' 
    ),

    array( 
     'id' => 300,
     'Firstname' => 'Amrin',
     'Lastname' => 'Rahman' 
    )

);

// Get column of Firstname from the array 

$firstname = array_column($students, 'Firstname');

echo "<pre>";
print_r($firstname); // output: Array ( [0] => Mahmud [1] => Fahad [2] => Amrin )
echo "</pre>";

// Get column of Firstname indexed by the "id" column

$identity = array_column($students, 'Firstname', 'id');

echo "<pre>";
print_r($identity); // output: Array ( [100] => Mahmud [200] => Fahad [300] => Amrin )
echo "</pre>";

?>