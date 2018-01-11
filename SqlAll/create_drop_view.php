<?php

// VIEW is created when we need some data from a table to make another virtual table 

// create view

$sqlQuery = 
"CREATE VIEW customers_view AS
SELECT id, name, city FROM customers
WHERE name IS NOT NULL";

// drop view

$sqlQuery = "DROP VIEW customers";

?>

