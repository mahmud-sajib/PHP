<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

function checkNumber($a){
	if ($a>1) {
		throw new Exception("The exception is thrown");
	}

	return true;

}

try {

checkNumber(2);

echo "Exception is not thrown";
	
} 

catch (Exception $e) {

	echo "Message: " . $e->getMessage();
	
} 


?>
	
</body>
</html>