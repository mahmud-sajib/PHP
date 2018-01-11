<?php

// HAVING clause is used in aggregate function to fetch data following any condition 

$sqlQuery = "SELECT age, COUNT(age) FROM customers GROUP BY age HAVING COUNT(age)>=2";

?>