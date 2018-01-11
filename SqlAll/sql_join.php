<?php

// INNER JOIN will not show any data if the values from two different table columns aren't matched

SELECT customers.name, orders.orderNumber
FROM customers 
INNER JOIN orders 
ON customers.id = orders.customerId 
ORDER BY customers.name;

// LEFT JOIN will show NULL (in the right table) if the values from two different table columns aren't matched

SELECT customers.name, orders.orderNumber
FROM customers 
LEFT JOIN orders 
ON customers.id = orders.customerId 
ORDER BY customers.name;

// RIGHT JOIN will show NULL (in the left table) if the values from two different table columns aren't matched

SELECT orders.orderNumber, customers.name
FROM orders
RIGHT JOIN customers
on orders.customerId = customers.name
ORDER BY customers.name;

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