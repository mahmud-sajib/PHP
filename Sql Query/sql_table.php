<?php

// creates a table

CREATE TABLE tableName(

	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255),
	email VARCHAR(255),
	phone VARCHAR(255),
	PRIMARY KEY(id)	

);

// change table name

ALTER TABLE oldTable RENAME TO newTable;

// truncates a table (keeping the table while deleting all data from it using TRUNCATE keyword )

TRUNCATE TABLE tableName;

?>