<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_Request &amp; $_Post</title>
</head>
<body>

<!--$_REQUEST is used to collect data after submitting an HTML form using-->

<!-- $_POST is used to collect form data after submitting an HTML form using 'post' method-->

<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
	
<input type="text" name="username" placeholder="username">

<input type="submit" value = "submit">

<?php

// $_SERVER['REQUEST_METHOD'] returns the request method used to access the page (such as POST)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['username'];
	if (empty($name)) {
	 	echo "You have no input";
	 } else {
	 	echo "You have entered: " . $name;
	 }
}

?>

</form>

<!-- GET Method Example-->

<a href="text.php?msg=Hi&ext=Mahmud">Send Data</a>

</body>
</html>