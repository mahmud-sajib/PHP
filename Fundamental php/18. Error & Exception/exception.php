<?php

function checkNumber($a){
	if ($a>1) {
		throw new Exception("The exception is thrown");
	}
	return true;
}

try {
checkNumber(0);
echo "Exception is not thrown";
} 

catch (Exception $e) {
	echo "Message: " . $e->getMessage(); // output: Message: The exception is thrown
} 

?>