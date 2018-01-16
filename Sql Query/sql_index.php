<?php

/*
 INDEX is created to search data efficiently
*/

// creates an index in city column

CREATE INDEX CIndex ON customers(city);

// drops the index

DROP INDEX CIndex ON customers;

?>