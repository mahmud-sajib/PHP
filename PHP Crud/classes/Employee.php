<?php

class Employee extends Database{
    
    // database table
    private $table = 'employeetbl';

    /*========== perform read operation to fetch all value from database ==========*/

    public function readAll(){
        // query to select all data from table
        $sql = "SELECT * FROM $this->table";
        // prepare a database connection
        $stmt = $this->connect()->prepare($sql);
        // execute the query 
        $stmt->execute();
        // fetch all data
        $data = $stmt->fetchAll();
        // return all data
        return $data;
    }
   
    /*==========perform create operation to insert value into database==========*/

    public function insert($fields){
        // query to insert data to table
        $sql = "INSERT INTO $this->table(name,city,designation) VALUES (:name,:city,:designation)";
        // prepare a database connection
        $stmt = $this->connect()->prepare($sql);
        // bind value to database column
        $stmt->bindParam(':name',$fields['name']);
        $stmt->bindParam(':city',$fields['city']);
        $stmt->bindParam(':designation',$fields['designation']);
        // execute the query
        return $stmt->execute();
    }

    /*==========perform update operation to update existing value of database==========*/

    // get the field information through specific id 
    public function readById($id){
        // query to select id specific data
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        // prepare a database connection
        $stmt = $this->connect()->prepare($sql);
        // bind value to database column
        $stmt->bindParam(':id',$id);
        // execute the query
        $stmt->execute();
        // fetch all data
        $data = $stmt->fetch();
        // return all data
        return $data;
    }

    // update the field information using specific id 
    public function update($fields,$id){
        // query to update id specific data
        $sql = "UPDATE $this->table SET name=:name, city=:city, designation=:designation WHERE id=:id";
        // prepare a database connection
        $stmt = $this->connect()->prepare($sql);
        // bind value to database column
        $stmt->bindParam(':name',$fields['name']);
        $stmt->bindParam(':city',$fields['city']);
        $stmt->bindParam(':designation',$fields['designation']);
        $stmt->bindParam(':id',$id);
        // execute the query
        return $stmt->execute();
    }

    /*==========perform delete operation to delete value from database==========*/

    public function delete($id){
        // query to delete id specific data
        $sql = "DELETE FROM $this->table WHERE id=:id";
        // prepare a database connection
        $stmt = $this->connect()->prepare($sql);
        // bind value to database column
        $stmt->bindParam(':id',$id);
        // execute the query
        $stmt->execute();
    }

    /*==========perform error handling==========*/
    
    public function errorHandling($name, $city, $designation){

        // set session variable if the field is empty
        if (empty($name)) {
            $_SESSION['error["nameErr"]'] = "Name field is required";
        }
        // set session variable if the field is empty
        if(empty($city)) {
            $_SESSION['error["cityErr"]'] = "City field is required";
        }
        // set session variable if the field is empty
        if(empty($designation)){
            $_SESSION['error["designationErr"]'] = "Designation field is required";
        }
        // redirect after the execution
        header('Location:create.php');
        // stop execution
        exit();

    }

}

?>