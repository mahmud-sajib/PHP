<?php


// inserts data

INSERT INTO customers(name, email, city) VALUES
('kAJOL','ka@yahoo.com', 'Sylhet'),
('Rafiq', 'ra@email.com', 'Bogura');

// updates data

UPDATE customers SET city = 'Rajshahi' WHERE id = 1;

// deletes data

DELETE FROM customers WHERE id = 1;

?>