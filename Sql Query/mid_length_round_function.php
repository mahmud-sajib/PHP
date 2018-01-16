<?php
/*

1. The MID() function extracts a substring from a string
MID(string, start, length) 

2. The LENGTH() function returns the length of the specified string 

3. The ROUND() function rounds the floating point number to the nearest integer

*/

// fetches the first 4 characters of city names from customers table 

SELECT MID(city,1,4) AS Town FROM customers;

// outputs the character length of email's values

SELECT name , LENGTH(email) AS MailLength FROM customers;

// rounds floating value of a field

SELECT name , ROUND(salary,0) AS RounSal FROM customers;

?>