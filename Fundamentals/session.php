<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session </title>
</head>
<body>

<?php

	$name = $_SESSION['name'] ="Mohoisn";
	$dept = $_SESSION['dept'] ="CSE";
  
	echo "<br>";
	echo "Your Name ".$_SESSION['name']."<br>";
	session_unset();
	echo "Your Department ".$_SESSION['dept'];

?>

</body>
</html>