<?php

/*

1. The readfile() function read texts of a file and show the number of characters

2. The filesize() function returns the file size in bytes

3. The fopen() function is used to open files 

4. The fclose() function is used to close an open file.

5. The fread() function reads from an open file.

6. The fwrite() () function is used to write in a file.

7. The feof() function checks if the "end-of-file" (EOF) has been reached.

*/

// The readfile() function read texts of a file and show the number of characters

echo readfile("text.txt") . "</br>";

// The filesize() function returns the file size in bytes

echo filesize("text.txt") . "</br>";

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

$filecreate = fopen("wohoo.txt", "w") or die("File not found");
$article = "Hello coders! It's a great day!";
fwrite($filecreate, $article);
fclose($filecreate);

?>
	
</body>
</html>