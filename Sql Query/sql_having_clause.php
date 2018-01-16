<?php

/*

HAVING clause is used in aggregate function to fetch data following any condition 
The HAVING clause was added to SQL because the WHERE keyword could not be used with aggregate functions.

*/

SELECT age, COUNT(age) 
FROM customers 
GROUP BY age 
HAVING COUNT(age)>=2 ;

?>