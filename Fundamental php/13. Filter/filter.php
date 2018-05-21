<?php

/*
The filter_var() function filters a variable with the specified filter.
*/

// Filtering & Sanitizing String

$text = "<h1> Hello everyone! </h1>";
$newtxt = filter_var($text, FILTER_SANITIZE_STRING);
echo $newtxt . "</br>";

// Filtering & Validating Integer

$int = 50.5;
if (filter_var($int,FILTER_VALIDATE_INT)) {
	echo "This is an integer </br>";
} else {
	echo "This is not an integer </br>";
}

// Filtering & Validating Ip

$ip = "127.0.0.1";
if (filter_var($ip,FILTER_VALIDATE_IP)) {
	echo "This is a real IP </br>";
} else {
	echo "This is not an IP </br>";
}

// Filtering & Validating Email

$mail = "mahgmail.com";
if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
	echo "This is a valid mail address </br>";
} else {
	echo "This is not a valid mail address </br>";
}

// Filtering & Validating url

$url = "http://www.mahsajib.com";
if (filter_var($url,FILTER_VALIDATE_URL)) {
	echo "This is a valid url </br>";
} else {
	echo "This is not a valid url </br>";
}


// Advanced filtering

$num = 100;
$min = 1;
$max = 200;

if (filter_var($num, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min , "max_range" => $max) ))) {
	echo "It's in the range </br>";
} else {
	echo "It's not in the range </br>";
}

$myurl = "http://www.example.com?q=123";

if (filter_var($myurl, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
	echo "The url has query </br>";
} else {
	echo "The url doesn't have query </br>";
}

?>