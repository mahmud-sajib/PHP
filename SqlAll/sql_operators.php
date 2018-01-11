<?php

// select values between range

SELECT * FROM customers WHERE age BETWEEN 20 AND 30;



// fetches all the values from name column whose middle keywords are not 'imo'

SELECT * FROM customers WHERE name NOT LIKE '%imo%'; 

// fetches all the values from city column whose values are Dhaka' & 'Sylhet'

SELECT * FROM customers WHERE city IN('Dhaka','Sylhet');

/*
 INDEX is created to search data efficiently
*/

// creates an index in city column

CREATE INDEX CIndex ON customers(city);

// drops the index

DROP INDEX CIndex ON customers;

// relationship and foreign key

// creating foreign keys

CREATE TABLE orders(
    id INT NOT NULL AUTO_INCREMENT,
    orderNumber VARCHAR(255),
    customerId INT,
    productId INT,
    orderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(customerId) REFERENCES customers(id),
    FOREIGN KEY(productId) REFERENCES products(id)
);


?>