<?php include "inc/header.php"; ?>

<?php

spl_autoload_register(function($class){
    include "classes/".$class.".php";
});

?>

<?php

$user = new Student();

?>




<section class="mainleft">

<?php

if (isset($_POST['create'])) {

    $iname = $_POST['name'];
    $idept = $_POST['dept'];
    $iage = $_POST['age'];

    $user->setName($iname);
    $user->setDept($idept);
    $user->setAge($iage);

    if ($user->insert()) {
        echo "Data inserted successfully";
    }

}

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $iname = $_POST['name'];
    $idept = $_POST['dept'];
    $iage = $_POST['age'];

    $user->setName($iname);
    $user->setDept($idept);
    $user->setAge($iage);

    if ($user->update($id)) {
        echo "Data updated successfully";
    }

}

?>

<?php

if (isset($_GET['action']) && $_GET['action'] == 'delete') {

    $id = (int)$_GET['id'];

    if ($user->delete($id)) {
        echo "Data deleted successfully";
    }

}    

?>

<?php

if (isset($_GET['action']) && $_GET['action'] == 'edit') {

    $id = (int)$_GET['id'];

    $data = $user->readById($id);

?>

<form action="" method="post">
 <table>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $data['name'];?>" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept" value="<?php echo $data['dept'];?>" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" value="<?php echo $data['age'];?>" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="Update"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>

<?php } else {?>

<form action="" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="create" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>

<?php } ?>


</section>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    <?php

    $i=0;

    foreach ($user->readAll() as $key => $value) {
        $i++;

    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dept']; ?></td>
        <td><?php echo $value['age']; ?></td>
        <td>
        
        <?php echo "<a href='index.php?action=edit&id=".$value['id']."'>Edit</a>"; ?> ||
        <?php echo "<a href='index.php?action=delete&id=".$value['id']."' onClick='return confirm(\"Sure?\")' >Delete </a>"; ?>
        
        </td>
    </tr>


    <?php } ?>

   

    
  </table>
</section>

<?php include "inc/footer.php"; ?>