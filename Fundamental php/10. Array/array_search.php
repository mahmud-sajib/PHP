<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// The array_search() function search an array for a value and returns the key.

$color = array( 'a' => 'red', 'b' => 'blue', 'c' => 'green');

if (isset($_POST['text'])) {
	$txt = $_POST['text'];
	$result = array_search($txt, $color);

	echo "You searched for $txt and the key is $result";
}


?>

<form action=" " method="post">
	
<input type="text" name="text">
<input type="submit" value="submit">

</form>
	
</body>
</html>