<?php

include "Main.php";

class Student extends Main{

	protected $table = 'tbl_user';

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

}

?>