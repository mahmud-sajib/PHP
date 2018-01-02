<?php

$dsn = "mysql:dbname=hellodb;host=localhost;";
$user = "niha";
$pass = "123456";

try {
	$pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	echo "Connection failed.." . $e->getMessage();
}

// performing insert query using bindParam() and named placeholder

$name = "Paul";
$email = "paul@yahoo.net";
$skill = "Business";

$sql = " insert into students_info(name,email,skill) values(:name, :email, :skill) ";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':skill', $skill);

$stmt->execute();

// performing insert query using array and question mark (?) placeholder

$iname = "Mahon";
$iemail = "mahon@yahoo.com";
$iskill = "Detective";

$new_sql = " insert into students_info(name, email, skill) values(?, ?, ?) ";

$stmt = $pdo->prepare($new_sql);

$arr = array($iname, $iemail, $iskill);

$stmt->execute($arr); 

?>
