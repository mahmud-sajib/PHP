<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session </title>
</head>
<body>


<?php
// Get session values

echo "Favorite color is " . $_SESSION["favcolor"] . "</br>" ;
echo "Favorite color is " . $_SESSION["favanimal"] . "</br>" ;

?>

</body>
</html>