
<?php

/*
  1. bind_param() function binds variables to a prepared statement as parameters
*/

$db = new mysqli("localhost","niha","123456","hellodb");

if(mysqli_connect_errno()){
	echo "Connection failed";
	exit();
} else {
	//echo "Connection successful";
}

$sql = " insert into students_info(name,email,skill) values(?,?,?) ";

// preparing a query
$stmt = $db->prepare($sql);

// binding variables to a prepared statement as parameters
$stmt->bind_param("sss", $iname, $iemail, $iskill);

// setting the values of bind variables to be inserted into the corresponding fields in database
$iname = "Kalvin";
$iemail = "kalvin@bing.com";
$iskill = "Football";

// executing a prepared query
$stmt->execute();

// closing the prepared statement
$stmt->close();

// closing the database connection
$db->close();

?>
