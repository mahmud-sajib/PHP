<?php

//loading all the classes from different files
spl_autoload_register(function($class){
    include "classes/".$class.".php";
});

/*========== Delete value from database(Start)==========*/

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $employee = new Employee();
    $rows = $employee->delete($id);
}

/*========== Delete value from database(End)==========*/

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP CRUD APP</title>
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
                        <a href="create.php" class="btn btn-md btn-success float-right mb-4">
                            Create Employee
                        </a>
                        <h4>All Employees</h4>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                            /*==========Fetch value from database(Start)==========*/
                            
                            // create an object instance
                            $employee = new Employee();
                            // call the method that contains query
                            $rows = $employee->readAll();
                            // write a loop to show data on the frontend 
                            foreach ($rows as $value) {
                            
                        ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $value['id']; ?>
                                        </th>
                                        <td>
                                            <?php echo $value['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['city']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['designation']; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="edit.php?edit=<?php echo $value['id'];?>">Edit</a> &nbsp;
                                            <a class="btn btn-sm btn-danger" href="index.php?del=<?php echo $value['id'];?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                        }

                            /*==========Fetch value from database(End)==========*/

                        ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </body>

    </html>