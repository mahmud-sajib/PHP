<?php

$dsn = "mysql:dbname=hellodb; host=localhost;";
$user = "niha";
$pass = "123456";

try {

	$pdo = new PDO($dsn, $user, $pass);
	
} catch (PDOException $e) {
	echo "Connection Failed" . $e->getMessage();
}


$sql = " select * from students_info ";

// performs the query
$result = $pdo->query($sql);

// showing the result as array
foreach ($result as $value) {
	echo $value["email"] . "</br>";
}

?>