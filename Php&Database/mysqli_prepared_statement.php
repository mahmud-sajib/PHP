
<?php

/*
  1. prepare() function prepares a query
  2. execute() function executes a prepared query
  3. bind_result() function binds variables to a prepared statemnet for result storage
  4. fetch() function fetches results from a prepared statement into the bound variables
*/

$db = new mysqli("localhost","niha","123456","hellodb");

if(mysqli_connect_errno()){
	echo "Connection failed";
	exit();
} else {
	//echo "Connection successful";
}

$sql = " select name, skill from students_info order by id ";

// prepares a query
$stmt = $db->prepare($sql);

// executes a prepared query
$stmt->execute();

// binds variables to a prepared statemnet for result storage
$stmt->bind_result($name, $skill);

// fetch results from a prepared statement into the bound variables
while($stmt->fetch()){
	echo $name . " : " . $skill . "</br>";
}

?>
