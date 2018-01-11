<?php

// performing a subquery within SELECT statement

$sqlQuery = "DELETE FROM customers_backup WHERE age IN(SELECT age FROM customers WHERE age=32)";

?>