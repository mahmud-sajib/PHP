<?php

// performing a subquery within SELECT statement

$sqlQuery = "SELECT * FROM customers WHERE id IN(SELECT id FROM customers WHERE age>30)";

?>