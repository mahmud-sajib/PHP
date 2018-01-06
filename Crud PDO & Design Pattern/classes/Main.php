<?php

include "Database.php";

abstract class Main{

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	// performing read query through id

	public function readById($id){

		$sql = "SELECT * FROM $this->table WHERE id=:id";

		$stmt = Database:: prepareQuery($sql);

		$stmt->bindParam(':id',$id);

		$stmt->execute();

		return $stmt->fetch();

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