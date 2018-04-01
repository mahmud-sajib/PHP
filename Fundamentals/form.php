<?php

$errname = $erremail = $errwebsite = $errcomment = $errgender = "";

$name = $email = $website = $comment = $gender = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["username"])) {

		$errname = "Name is required";
		

	} else {

		$name = validate($_POST["username"]);
		echo $name . "</br>";

	}

	if (empty($_POST["mail"])) {

		$erremail = "Email is required";
		

	} elseif (!filter_var($_POST["mail"] , FILTER_VALIDATE_EMAIL)) {

		$erremail = "Invalid email";

	} else {

		$email = validate($_POST["mail"]);
		echo $email . "</br>";

	}

	if (empty($_POST["website"])) {
		
		$errwebsite = "Website is required";
		

	} elseif (!filter_var($_POST["website"] , FILTER_VALIDATE_URL)) {

		$errwebsite = "Website is wrong";

	} else {
		
		$website = validate($_POST["website"]);
		echo $website . "</br>";

	}

	if (empty($_POST["comment"])) {
		
        $errcomment = "Comment is required";
       

	} else {

		$comment = validate($_POST["comment"]);
		echo $comment . "</br>";

	}

	if (empty($_POST["gender"])) {

		$errgender = "Gender is required";
	

	} else {

		$gender = validate($_POST["gender"]);
		echo $gender . "</br>";

	}

	
	
	
	/*

	echo "Name: " .$name. "</br>";

	echo "Email: " .$email. "</br>";

	echo "Website: " .$website. "</br>";

	echo "Comment: " .$comment. "</br>";

	echo "Sex: " .$sex. "</br>";

	*/

}

function validate($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

    return $data;

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h2>A contact form</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>" method="post">
	
<p>Name*: <input type="text" name="username"> <?php echo $errname; ?></p> 

<p>Email*: <input type="email" name="mail"> <?php echo $erremail; ?></p>

<p>Website*: <input type="url" name="website"> <?php echo $errwebsite; ?></p>

<p>Comment*:  <textarea name="comment" id="" cols="30" rows="10" ></textarea> <?php echo $errcomment; ?></p>

<p>Gender*: <?php echo $errgender; ?> <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br> <?php echo $errgender; ?> </p>

<p> <input type="submit" value="submit"> </p>



</form>
	
</body>
</html>