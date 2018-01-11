<?php

// WITH CHECK OPTION is used in VIEW when every condition needs to be satified otherwise an error is returned 

$sqlQuery = 
"CREATE VIEW customers_view_new AS 
SELECT id, name, city FROM customers 
WHERE name IS NOT NULL WITH CHECK OPTION";

// this query produces an error bcoz of with  WITH CHECK OPTION keywords

$sqlQuery = "INSERT INTO customers_view_new VALUES(13, NULL, 'India')";

?>



