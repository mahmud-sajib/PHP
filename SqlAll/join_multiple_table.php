<?php

// joining multiple table using INNER JOIN

$sqlQuery = 
"SELECT orders.orderNumber, customers.name, products.name 
FROM orders 
INNER JOIN products 
    ON orders.productId = products.id 
INNER JOIN customers 
    ON orders.customerId = customers.id 
ORDER BY orders.orderNumber";




?>