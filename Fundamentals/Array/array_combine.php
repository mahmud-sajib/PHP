<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// Arrange the elemnts of two array as KEY VALUE pair

$students = array('Mahmud', 'Arif', 'Razob');

$dept = array('CSE', 'EEE', 'MEC');

$pupil = array_combine($students,$dept);

echo "<pre>";

print_r($pupil);

echo "</pre>";

?>
	
</body>
</html>