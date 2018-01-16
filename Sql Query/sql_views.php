<?php

/*

In SQL, a view is a virtual table based on the result-set of an SQL statement.

A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.

*/

// create VIEW

CREATE VIEW customers_view AS
SELECT id, name, city FROM customers
WHERE name IS NOT NULL;

// drop VIEW

DROP VIEW customers;

// insert data into VIEW  

INSERT INTO customers_view VALUES(15,'Rahim','Khulna');

// update data into view 

UPDATE customers_view SET name = 'Mohsin' WHERE id = 11;

// delete data from view 

DELETE FROM customers_view WHERE id = 16;

?>