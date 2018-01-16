<?php

// performing a subquery within SELECT statement

SELECT * FROM customers WHERE id IN (SELECT id FROM customers WHERE age>30);

// performing a subquery within INSERT statement

INSERT INTO customers_backup SELECT * FROM customers WHERE id IN (SELECT id FROM customers);

// performing a subquery within UPDATE statement

UPDATE customers SET salary = salary*2 WHERE age IN(SELECT age FROM customers_backup WHERE age>=30);

// performing a subquery within DELETE statement

DELETE FROM customers_backup WHERE age IN(SELECT age FROM customers WHERE age=32);

?>