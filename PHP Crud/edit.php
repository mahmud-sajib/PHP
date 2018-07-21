<?php
// starts session
session_start();

//loading all the classes from different files
spl_autoload_register(function($class){
    include "classes/".$class.".php";
});

/*========== Update existing value of database(Start)==========*/

// get id of a specfic row to perform update operation
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $employee = new Employee();
    $value = $employee->readById($id);
}

// update value of that row
if (isset($_POST['update'])) {
    // hold user input in variable
    $name = $_POST['name'];
    $city = $_POST['city'];
    $designation = $_POST['designation'];

    if(!empty($name) && !empty($city) && !empty($designation)){

        // string sanitization and allowed pattern specification
        $name = filter_var($name,FILTER_SANITIZE_STRING);
        $name = preg_replace("/[^a-zA-Z0-9]+/", "", $name);
       
        // string sanitization and allowed pattern specification
        $city = filter_var($city,FILTER_SANITIZE_STRING);
        $city = preg_replace("/[^a-zA-Z0-9]+/", "", $city);
    
        // string sanitization and allowed pattern specification
        $designation = filter_var($designation,FILTER_SANITIZE_STRING);
        $designation = preg_replace("/[^a-zA-Z0-9]+/", "", $designation);

        // create array to hold the variables
        $fields = [
            'name' => $name,  
            'city' => $city,
            'designation' => $designation
        ];

        // grab id of the hidden input field
        $id =  $_POST['id'];

        // call the update method
        $employee = new Employee();
        $rows = $employee->update($fields,$id); 

    } else {
        $employee->errorHandling($name, $city, $designation);
    }

    // redirect if the method was called succesfully
    if ($rows) {
        header('Location:index.php');     
    } 
    
}

/*========== Update existing value of database(End)==========*/

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
            crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">All Employees</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h4 class="mb-4">Edit Employee</h4>
                        <form action="" method="post">
                            <!--hidden input-->
                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <!--hidden input-->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <!--show field value-->
                                <input type="text" name="name" value="<?php echo $value['name']; ?>" class="form-control" placeholder="Enter name">

                                <?php
                                    // checks if the session variable was set
                                    if (isset($_SESSION['error["nameErr"]'])) {
                                    ?>
                                        <div class="alert alert-warning" role="alert">
                                            <?php echo $_SESSION['error["nameErr"]'];?>
                                        </div>
                                    <?php
                                    }
                                ?>

                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <!--show field value-->
                                <input type="text" name="city" value="<?php echo $value['city']; ?>" class="form-control" placeholder="Enter city">
                                <?php
                                    // checks if the session variable was set
                                    if (isset($_SESSION['error["cityErr"]'])) {
                                    ?>
                                        <div class="alert alert-warning" role="alert">
                                            <?php echo $_SESSION['error["cityErr"]'];?>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <!--show field value-->
                                <input type="text" name="designation" value="<?php echo $value['designation']; ?>" class="form-control" placeholder="Enter designation">
                                <?php
                                    // checks if the session variable was set
                                    if (isset($_SESSION['error["designationErr"]'])) {
                                    ?>
                                        <div class="alert alert-warning" role="alert">
                                            <?php echo $_SESSION['error["designationErr"]'];?>
                                        </div>
                                    <?php
                                    }

                                ?>
                            </div>

                            <input type="submit" name="update" class="btn btn-primary" value="update "/>
                            
                            <?php
                                // deletes all the session variables 
                                session_destroy(); 
                            ?>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>