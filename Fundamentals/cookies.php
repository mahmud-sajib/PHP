<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

if (!isset($_COOKIE["Visited"])) {
	setcookie("Visited", "John", time()+3600, "/") or die("Cookie is not set");
    echo "This is your first visit in the website </br>";
} else {
	echo "You are an old visitor  </br>";
}

setcookie("Visited", "", time()-3600);

echo "Cookie deleted";

?>
	
</body>
</html>