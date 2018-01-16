<?php

// fethces summation of ages from customers table

SELECT SUM(age) FROM customers;

// fethces average of ages from customers table

SELECT AVG(age) FROM customers;

// fethces maximum of ages from customers table

SELECT MAX(age) FROM customers;

// fethces minimum of ages from customers table

SELECT MIN(age) FROM customers;

// fethces total number of of ages from customers table

SELECT COUNT(age) FROM customers;

// fetches and count number of ages which are greater than 25

SELECT age, COUNT(age) 
FROM customers 
WHERE age>25 GROUP BY age;

?>