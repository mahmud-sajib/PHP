<?php

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