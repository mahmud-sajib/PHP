<?php

// performing a subquery within SELECT statement

$sqlQuery = "INSERT INTO customers_backup SELECT * FROM customers WHERE id IN(SELECT id FROM customers)";

?>