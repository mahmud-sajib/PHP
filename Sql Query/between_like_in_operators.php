<?php

// selects values between range (using BETWEEN keyword)

SELECT * FROM customers WHERE age BETWEEN 20 AND 30;


// fetches all the values from name column whose middle keywords are not 'imo' (using LIKE keyword)

SELECT * FROM customers WHERE name NOT LIKE '%imo%'; 

// fetches all the values from city column whose values are Dhaka' & 'Sylhet' (using IN keyword)

SELECT * FROM customers WHERE city IN('Dhaka','Sylhet');

?>