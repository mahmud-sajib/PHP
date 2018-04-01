<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The in_array() function checks whether an element is present in an array

$name = array("Rony", "Johny", "Shely", "Doly");

if (isset($_POST["username"])) {
	$text = $_POST["username"];

	if (in_array($text, $name)) {
		echo "{$text} exists";
	} else {
		echo "{$text} doesn't exist";
	}
}



?>


<form action=" " method="post">
	
<input type="text" name="username">
<input type="submit" value="send">

</form>


	
</body>
</html>