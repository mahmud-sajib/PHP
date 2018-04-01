<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

if (isset($_FILES['image'])) {
	
	$filename = $_FILES['image']['name'];
	$filetmp = $_FILES['image']['tmp_name'];
	move_uploaded_file($filetmp, 'images/'. $filename);
	echo "File Uploaded successfully";
}

?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" value="submit">
</form>
	
</body>
</html>