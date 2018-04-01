<?php

//namespace Techspace;

require getcwd().'/google.php';   
require getcwd().'/twitter.php';

use Techspace\Api as tweet;    


// We defined the namespace and calling the associated folder's properties
//$obj = new Techspace\Api; // qualified class name 

$obj = new tweet;

echo "</br>";

// We didn't define any namespace and calling the global folder's properties
//$obj = new \Api; // fully qualified class name

$obj = new Api;

?>