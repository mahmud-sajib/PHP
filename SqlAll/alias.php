<?php

// rename the column of a table using alias

$sqlQuery = "SELECT name AS Name FROM table_name";

// concat two columns of a table

$sqlQuery = "SELECT CONCAT(firstName, ' ', lastName) AS 'Name' FROM table_name";

// fetching data from multiple tables

$sqlQuery = "SELECT o.id, o.orderNumber, c.name FROM orders AS o, customers as c";

?>