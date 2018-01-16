<?php

// INNER JOIN keyword selects records that have matching values in both tables.

SELECT customers.name, orders.orderNumber
FROM customers 
INNER JOIN orders 
ON customers.id = orders.customerId 
ORDER BY customers.name;

// joining multiple table (using INNER JOIN)

SELECT orders.orderNumber, customers.name, products.name 
FROM orders 
INNER JOIN products 
    ON orders.productId = products.id 
INNER JOIN customers 
    ON orders.customerId = customers.id 
ORDER BY orders.orderNumber;

// The LEFT JOIN keyword returns all records from the left table , and the matched records from the right table. The result is NULL from the right side, if there is no match.

SELECT customers.name, orders.orderNumber
FROM customers 
LEFT JOIN orders 
ON customers.id = orders.customerId 
ORDER BY customers.name;

// The RIGHT JOIN keyword returns all records from the right table, and the matched records from the left table. The result is NULL from the left side, when there is no match.

SELECT orders.orderNumber, customers.name
FROM orders
RIGHT JOIN customers
on orders.customerId = customers.name
ORDER BY customers.name;

?>