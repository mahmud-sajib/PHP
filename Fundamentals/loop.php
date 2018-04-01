<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<?php

$x=1;

do{
	echo "The number is: $x </br>";
	$x++;
} while ( $x<= 5)

?>


<?php

$students = array("arif","mizan", "avi");

foreach ($students as $pupil) {
	echo "$pupil </br>";
}

?>


<?php

/*

for ( $i<=1; $i=10; ++$i) { 
	echo "We have: $i </br>";
}

*/

?>
	
</body>
</html>