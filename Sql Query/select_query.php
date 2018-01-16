<?php

// set a limit to the number of rows needs to be selected (using LIMIT keyword)

SELECT * FROM customers LIMIT 2; 

// select 2 rows after the first row  

SELECT * FROM customers LIMIT 1,2; 

// select specific columns from table

SELECT name, city FROM customers;

// select specific row from table (using id)

SELECT * FROM customers WHERE id=2; 

// sorts all data in alphabetic order using specified column (using ORDER BY keyword)

SELECT * FROM customers ORDER BY city;

// sorts all data in descending order using specified column (using ORDER BY and DESC keyword)

SELECT * FROM customers ORDER BY name DESC;

// sorts all data in ascending order using specified column (using ORDER BY and ASC keyword)

SELECT * FROM customers ORDER BY name ASC;

// ignores duplicate column value and show only once (using DISTINCT keyword)

SELECT DISTINCT city FROM customers;

?>