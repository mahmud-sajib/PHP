<?php

/* 
The compact() function creates an array from variables and their values. 
Note: Any strings that does not match variable names will be skipped.
*/

$name = "Rony";
$dept = "Math";
$id = 1610;

$result = compact("name", "dept", "id");

echo "<pre>";
print_r($result);
echo "</pre>";

?>