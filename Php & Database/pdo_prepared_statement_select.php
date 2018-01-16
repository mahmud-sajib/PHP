<?php

$dsn = "mysql:dbname=hellodb; host=localhost;";
$user = "niha";
$pass = "123456";

try {
	$pdo = new PDO($dsn, $user, $pass);

} catch (PDOException $e) {
	echo "Connection failed.." . $e->getMessage();
}

// performing select query using array and named placeholder

$id = 1;

$sql_a = "select * from students_info where id=:id";

$stmt = $pdo->prepare($sql_a);

$stmt->execute(array(':id'=>$id));

while($data = $stmt->fetch()){
	echo $data['name'] ."<br/>". $data['skill'] ."<br/>";
}

// performing select query using array and question mark(?) placeholder

$id = 2;

$sql_b = "select * from students_info where id=?";

$stmt = $pdo->prepare($sql_b);

$stmt->execute(array($id));

while($data = $stmt->fetch()){
	echo $data['name'] ."<br/>". $data['skill'] . "</br>";
}

// performing select query using bindParam() and question mark(?) placeholder

$id = 3;
$skill = "Cooking";

$sql_c = "select * from students_info where id=? and skill=?";

$stmt = $pdo->prepare($sql_c);

$stmt->bindParam(1,$id);
$stmt->bindParam(2,$skill);

$stmt->execute();

while ($data= $stmt->fetch()) {
	echo $data['name'] ."<br/>". $data['email'] . "</br>";
}

// performing select query using bindValue() and named placeholder

$name = 'Simon';
$email = "simon@outlook.com";

$sql_d = "select * from students_info where name=:name and email=:email";

$stmt = $pdo->prepare($sql_d);

$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);

$stmt->execute();

while ($data= $stmt->fetch()) {
	echo $data['id'] ."<br/>". $data['skill'] . "</br>";
}

?>
