<?php

// creates a database

CREATE DATABASE dbName;

// drops a database

DROP DATABASE dbName;

// creates a table

CREATE TABLE tableName(

	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255),
	email VARCHAR(255),
	phone VARCHAR(255),
	PRIMARY KEY(id)	

);

// inserts data

INSERT INTO customers(name, email, city) VALUES
('kAJOL','ka@yahoo.com', 'Sylhet'),
('Rafiq', 'ra@email.com', 'Bogura');

// updates data

UPDATE customers SET city = 'Rajshahi' WHERE id = 1;

// deletes data

DELETE FROM customers WHERE id = 1;

// add a new column into existing table

ALTER TABLE customers ADD column_name VARCHAR(50);

// modfiy field type of a column

ALTER TABLE customers MODIFY COLUMN column_name INT(11);

// delete a column

ALTER TABLE customers DROP COLUMN column_name;

// set a limit to the number of rows needs to be selected

SELECT * FROM customers LIMIT 2; 

// select 2 rows after the first row  

SELECT * FROM customers LIMIT 1,2; 

// select specific columns from table

SELECT name, city FROM customers;

// select specific row from table using id

SELECT * FROM customers WHERE id=2; 

// sorts all data in alphabetic order using specified column

SELECT * FROM customers ORDER BY city;

// sorts all data in descending order using specified column

SELECT * FROM customers ORDER by name DESC;

// sorts all data in ascending order using specified column

SELECT * FROM customers ORDER by name ASC;

// ignores duplicate column value and show only once 

SELECT DISTINCT city FROM customers;

?>