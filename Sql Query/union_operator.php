<?php

// UNION selects all the different cities (only distinct values) from "Customers" and "distributors"

SELECT city FROM customers
UNION
SELECT city FROM distributors
ORDER BY city;

// UNION ALL selects duplicate values from "Customers" and "distributors"

SELECT city FROM customers
UNION ALL
SELECT city FROM distributors
ORDER BY city;

?>