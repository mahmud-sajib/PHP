<?php

// fethces summation of ages from customers table

$sqlQuery = "SELECT SUM(age) FROM customers";

// fethces average of ages from customers table

$sqlQuery = "SELECT AVG(age) FROM customers";

// fethces maximum of ages from customers table

$sqlQuery = "SELECT MAX(age) FROM customers";

// fethces minimum of ages from customers table

$sqlQuery = "SELECT MIN(age) FROM customers";

// fethces total number of of ages from customers table

$sqlQuery = "SELECT COUNT(age) FROM customers";

// fetches and count number of ages which are greater than 25

$sqlQuery = 
"SELECT age, COUNT(age)
FROM customers 
WHERE age>25 GROUP BY age";

?>