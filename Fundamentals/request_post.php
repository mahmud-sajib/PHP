<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_Request &amp; $_Post</title>
</head>
<body>

<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
	
<input type="text" name="username" placeholder="username">

<input type="submit" value = "submit">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_REQUEST['username'];
	if (empty($name)) {
	 	echo "You have no input";
	 } else {
	 	echo "You entered: " . $name;
	 }
}


?>

</form>
	
</body>
</html>