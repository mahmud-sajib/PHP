<?php

// fetches the first 4 characters of city names from customers table 

$sqlQuery = "SELECT MID(city,1,4) AS Town FROM customers";

// outputs the character length of a field value

$sqlQuery = "SELECT name , LENGTH(email) AS MailLength FROM customers";

// rounds floating value of a field

$sqlQuery = "SELECT name , ROUND(salary,0) AS RounSal FROM customers";

?>