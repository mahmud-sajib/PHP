<?php

// turning all the names into uppercase

$sqlQuery = "SELECT UCASE(name) FROM customers";

// turning all the names into lowercase

$sqlQuery = "SELECT CASE(city) FROM customers";

?>