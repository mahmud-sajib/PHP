<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	<!--We can write php in css-->
	.color{color:<?php echo 'blue'; ?>;}
	</style>
</head>
<body>

<section class="color">

<?php

//This is a single line comment

/* This is 
multiline comment */

echo "Hello Man" . '</br>'; // output: Hello Man(in blue color) 




?>	

</section>
	
</body>
</html>