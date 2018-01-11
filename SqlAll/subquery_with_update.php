<?php

// performing a subquery within INSERT statement

$sqlQuery = 
"UPDATE customers SET salary = salary*2 
WHERE age IN(SELECT age FROM customers_backup WHERE age>=30)";

?>