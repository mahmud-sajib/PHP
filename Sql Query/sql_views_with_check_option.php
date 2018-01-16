<?php

// WITH CHECK OPTION is used in VIEW when every condition of a query needs to be true

CREATE VIEW customers_view_new AS 
SELECT id, name, city FROM customers 
WHERE name IS NOT NULL WITH CHECK OPTION;

// this query produces an error bcoz of with  'WITH CHECK OPTION' is used here

INSERT INTO customers_view_new VALUES(13, NULL, 'India');

?>