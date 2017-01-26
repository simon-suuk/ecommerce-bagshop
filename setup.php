<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable("`employees`",
	"`eno` bigint(4) NOT NULL AUTO_INCREMENT,
	`ename` varchar(30) NOT NULL,
	`zip` decimal(5,0) NOT NULL,
	`hdate` date NOT NULL,
	PRIMARY KEY (`eno`),
	KEY `zip_idx` (`zip`),
	CONSTRAINT `zip` FOREIGN KEY (`zip`) REFERENCES `zipcodes` (`zip`) ON DELETE NO ACTION ON UPDATE NO ACTION");

  insertTable("`employees`", "suuk", "233", "2016-02-23");
?>

    <br>...done.
  </body>
</html>
