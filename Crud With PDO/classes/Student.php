<?php

include "Database.php";

class Student{

	private $table = 'tbl_user';

	private $name;
	private $dept;
	private $age;

	public function setName($iname){
		$this->name = $iname;
	}

	public function setDept($idept){
		$this->dept = $idept;
	}

	public function setAge($iage){
		$this->age = $iage;
	}

	// performing inset query

	public function insert(){

		$sql = " INSERT INTO $this->table(name,dept,age) VALUES(:name,:dept,:age) ";

		$stmt = Database:: prepareQuery($sql);

		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':dept', $this->dept);
		$stmt->bindParam(':age', $this->age);

		return $stmt->execute();

	}

	// performing read query through id

	public function readById($id){

		$sql = "SELECT * FROM $this->table WHERE id=:id";

		$stmt = Database:: prepareQuery($sql);

		$stmt->bindParam(':id',$id);

		$stmt->execute();

		return $stmt->fetch();


	}

	// performing update query

	public function update($id){

		$sql = "UPDATE $this->table SET name=:name, dept=:dept, age=:age WHERE id=:id";

		$stmt = Database:: prepareQuery($sql);

		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':dept', $this->dept);
		$stmt->bindParam(':age', $this->age);
		$stmt->bindParam(':id', $id);

		return $stmt->execute();

	}

	// performing read query
	
	public function readAll(){

		$sql = " SELECT * FROM $this->table ";

		$stmt = Database:: prepareQuery($sql);

		$stmt->execute();

		return $stmt->fetchAll();

	}

	// performing delete query

	public function delete($id){

		$sql = "DELETE FROM $this->table WHERE id=:id";

		$stmt = Database:: prepareQuery($sql);

		$stmt->bindParam(':id', $id);

		return $stmt->execute();

	}

}

?>