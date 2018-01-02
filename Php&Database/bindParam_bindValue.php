<?php

/*
The difference between bindParam() and bindValue() is -
1. bindParam() accepts the variable as parameter but doesn't accept the value
2. bindValue() accepts both  the variable and the value as parameter 
*/

$dsn = "mysql:dbname=hellodb; host=localhost;";
$user = "niha";
$pass = "123456";

try {
	$pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	echo "Connection failed.." . $e->getMessage();
}

$name = "Michael";
$email = "michael@gmail.com";
$skill = "Architect";

$sql = "insert into students_info(name, email, skill) values(:name, :email, :skill)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(":name",$name);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":skill","Architect");

$stmt->execute();

?>