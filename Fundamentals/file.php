<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

//read texts of a file and show the number of characters

echo readfile("text.txt") . "</br>";

//This function returns the file size in bytes

echo filesize("text.txt") . "</br>";

// reads the first line

//opening a file and reading it.

$ourfile = fopen("text.txt", "r") or die("File not found");
echo fread($ourfile, filesize("text.txt")) . "</br>";
fclose($ourfile);

//fgets() reads the first line of an article.

$ourfile = fopen("text.txt", "r") or die("File not found");
echo fgets($ourfile) . "</br>";
fclose($ourfile);

//fgetc() reads the first character of an article.

$ourfile = fopen("text.txt", "r") or die("File not found");
echo fgetc($ourfile) . "</br>";
fclose($ourfile);

//feof() reads the line/charachters untill the file is ended.

$ourfile = fopen("text.txt", "r") or die("file not found");
while (!feof($ourfile)) {
	echo fgets($ourfile) . "</br>";
}
fclose($ourfile);

//creating a file and writing on it

$filecreate = fopen("hello.txt", "w") or die("File not found");
$article = "Oh my my! It's a great experience";
fwrite($filecreate, $article);
fclose($filecreate);


?>
	
</body>
</html>