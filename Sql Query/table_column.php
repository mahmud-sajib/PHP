<?php

// add a new column into existing table

ALTER TABLE customers ADD column_name VARCHAR(50);

// modfiy field type of a column

ALTER TABLE customers MODIFY COLUMN column_name INT(11);

// delete a column

ALTER TABLE customers DROP COLUMN column_name;

?>