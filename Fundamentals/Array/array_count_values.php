<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// Shows how many elemnts are there and how many numbers of time

$students = array('Mahmud', 'Arif', 'Razob', 'Arif', 'Arif', 'Arif',  'Razob',  'Razob',  'Razob',  'Razob', 'Mahmud', 'Mahmud');



echo "<pre>";

print_r(array_count_values($students));

echo "</pre>";

?>
	
</body>
</html>