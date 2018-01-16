<?php

// giving a table column temporary name(alias) (using AS keyword)

SELECT name AS newName FROM table_name;

// concat two columns of a table (using CONCAT keyword)

SELECT CONCAT (firstName, ' ', lastName) AS 'Name' FROM table_name;

// fetching data from multiple tables

SELECT o.id, o.orderNumber, c.name FROM orders AS o, customers as c;

?>