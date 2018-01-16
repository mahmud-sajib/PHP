<?php

$dsn = "mysql:dbname=hellodb; host=localhost;";
$user = "niha";
$pass = "123456";

try {
	$pdo = new PDO($dsn, $user, $pass);

} catch (PDOException $e) {
	echo "Connection failed.." . $e->getMessage();
}

// performing update query using bindParam() and named placeholder

$id = 1;
$skill = 'Cycling';

$sql_a = " update students_info set skill=:skill where id=:id ";
$stmt = $pdo->prepare($sql_a);

$stmt->bindParam(':id',$id);
$stmt->bindParam(':skill',$skill);

$stmt->execute();

// performing update query using array and question mark(?) placeholder

$id = 4;
$skill = 'Joking';

$sql_b = "update students_info set skill=? where id=?";
$stmt = $pdo->prepare($sql_b);

$stmt->execute(array($skill, $id));

// performing update query using bindValue() and question mark(?) placeholder

$id = 7;

$sql_c = "delete from students_info where id=?";

$stmt = $pdo->prepare($sql_c);
$stmt->bindValue(1,7);
$stmt->execute();

// performing update query using array and named placeholder

$id = 8;

$sql_d = "delete from students_info where id=:id";

$stmt = $pdo->prepare($sql_d);
$stmt->execute(array(':id' => $id));

?>
