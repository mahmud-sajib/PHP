
<?php

// creating an object of mysqli class and passing parameters to it's constructor for database connection

$db = new mysqli("localhost","niha","123456","hellodb");

// mysqli_connect_errno() function returns the error code from last connection call

if(mysqli_connect_errno()){
	echo "Connection failed";
	exit();
} else {
	echo "Connection successful";
}

?>
