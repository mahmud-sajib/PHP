<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

/*
  1. bind_param() function binds variables to a prepared statement as parameters
  2. file_get_contents() function Reads entire file into a string
  3. send_long_data() function Allows to send parameter data to the server in pieces e.g. if the size of a blob exceeds the size of max_allowed_packet. This function can be called multiple times to send the parts of a character or binary data value for a column, which must be one of the TEXT or BLOB datatypes. 

*/

$db = new mysqli("localhost","root","","objectdb");

if(mysqli_connect_errno()){
	echo "Connection failed";
	exit();
} else {
	//echo "Connection successful";
}

// Inserting image into database



$sql = "insert into images(image) values(?)";

$stmt = $db->prepare($sql);

$stmt->bind_param("b", $i);

// reading the file's contents
$i = file_get_contents("rose.jpg");

// sending binary data to database
$stmt->send_long_data(0,$i);

$stmt->execute();



// Retrieving and showing image from database

$new_sql = "select image from images where id=?";

$stmt = $db->prepare($new_sql);

$stmt->bind_param("i",$id);

$id = 1;

$stmt->execute();

$stmt->bind_result($i);

$stmt->fetch();

header("content-type:jpg");

echo ' <img src="data:image/jpg; base64, '.base64_encode($i).' "> ';

?>

	
</body>
</html>