<?php

// fetches all the values from city column whose last keyword is 'i'

SELECT * FROM customers WHERE city LIKE '%i'; 

// fetches all the values from name column whose first keyword is 'K'

SELECT * FROM customers WHERE name LIKE 'K%';

// fetches all the values from name column whose middle keywords are 'imo'

SELECT * FROM customers WHERE name LIKE '%imo%'; 

// fetches all the values from name column whose last keyword is 'K'

SELECT * FROM customers WHERE name LIKE '_K';

?>