<?php

/*

  Wildcard characters are used with the SQL LIKE operator.

  There are two wildcards used in conjunction with the LIKE operator:
    % - The percent sign represents zero, one, or multiple characters
    _ - The underscore represents a single character

*/

// fetches all the values from city column whose last character is 'i'

SELECT * FROM customers WHERE city LIKE '%i'; 

// fetches all the values from name column whose first character is 'K'

SELECT * FROM customers WHERE name LIKE 'K%';

// fetches all the values from name column whose middle character are 'imo'

SELECT * FROM customers WHERE name LIKE '%imo%'; 

// fetches all the values from name column whose last character is 'K'

SELECT * FROM customers WHERE name LIKE '_K';

?>