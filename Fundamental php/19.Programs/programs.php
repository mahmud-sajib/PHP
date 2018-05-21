<?php

// factorial

$result = 1;

for ($i=1; $i<=6 ; $i++) { 
	$result = $result*$i;
}

echo $result . "</br>";

// fibonacci

$a = 1;
$b = 1;

echo $a." ".$b. " ";

$n = 5;

for ($i=0; $i<$n-2 ; $i++) {

	$c = $a + $b;
	echo $c. " ";
	$a = $b;
	$b = $c;
}

echo "</br>";

// reverse a string in php

$str = 'HELLOOMG';
$length = strlen($str);

for ($i=$length-1; $i>=0 ; $i--) { 
	echo $str[$i];
}
echo "</br>";

// printing pattern (pyramid)

for ($i=1; $i<=5 ; $i++) { 
	for ($j=1; $j<=$i; $j++) { 
		echo "*"." ";
	}
	echo "</br>";
}

// swapping the values of two variables

$a = 10;
$b = 5;

$a = $a+$b; // a=9

$b = $a-$b; // b=5

$a = $a-$b; // a=4  


echo "A: " .$a. " B: ".$b;

echo "</br>";


$number_class = ($number == 0) ? 'blue' : (($number > 0) ? 'green' : 'red');


?>