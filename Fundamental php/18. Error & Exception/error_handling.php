<?php

/*

1. E_WARNING : Non-fatal run-time errors. Execution of the script is not halted

2. E_NOTICE  : Run-time notices. The script found something that might be an error, but could also happen when running a script normally

*/

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$price = 45;

if ($pric == 45) {
	echo "The price is {$price}";
} else {
	echo "The price is not {$price}";
}

?>