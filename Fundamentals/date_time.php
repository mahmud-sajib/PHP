<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

echo "Today's date is : " . date("d-m-Y") . "</br>";

echo "Today's weekday is : " . date("l") . "</br>";

echo "Default time is : " . date("h:i:sa") . "</br>";

echo "Default timezone is " . date_default_timezone_get() . "</br>";

date_default_timezone_set("Asia/Dhaka");

echo "My time is: " . date("h:i:sa");

?>
	
</body>
</html>