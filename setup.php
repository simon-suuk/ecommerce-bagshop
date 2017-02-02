<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
include_once('DatabaseHelper.php');

$dbh = new DatabaseHelper();

/*$dbh->dbCleanUp('`zipcodes`');
$dbh->dbCleanUp('`customers`');
$dbh->dbCleanUp('`employees`');
$dbh->dbCleanUp('bags');
$dbh->dbCleanUp('parts');*/

$dbh->createTable('`zipcodes`',
	'`zip` decimal(5,0) NOT NULL,
	`city` varchar(30) NOT NULL,
	PRIMARY KEY (`zip`)');
	
$dbh->createTable('`customers`',
	'`cno` bigint(5) NOT NULL AUTO_INCREMENT,
	`cname` varchar(30) NOT NULL,
	`street` varchar(30) NOT NULL,
	`zip` decimal(5,0) NOT NULL,
	`phone` char(12) NOT NULL,
	PRIMARY KEY (`cno`),
	KEY `zip` (`zip`),
	CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`zip`) REFERENCES `zipcodes` (`zip`) ON DELETE NO ACTION ON UPDATE NO ACTION');

$dbh->createTable('`employees`',
	'`eno` bigint(4) NOT NULL AUTO_INCREMENT,
	`ename` varchar(30) NOT NULL,
	`zip` decimal(5,0) NOT NULL,
	`hdate` date NOT NULL,
	PRIMARY KEY (`eno`),
	KEY `zip_idx` (`zip`),
	CONSTRAINT `zip` FOREIGN KEY (`zip`) REFERENCES `zipcodes` (`zip`) ON DELETE NO ACTION ON UPDATE NO ACTION');

$dbh->createTable('bags',
	'bno int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	types varchar(45) NOT NULL');
	
$dbh->createTable('parts',
	'pno bigint(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pname varchar(30) NOT NULL,
	qno varchar(30) NOT NULL,
	price decimal(6,2) NOT NULL,
	bno int(11) NOT NULL,
	olevel int(11) NOT NULL,
	FOREIGN KEY (bno) REFERENCES bags (bno) ON DELETE NO ACTION ON UPDATE CASCADE');

$dbh->createTable('orders',
	'ono bigint(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cno bigint(5) NOT NULL,
	eno bigint(5) NOT NULL,
	received date NOT NULL,
	shipped date NOT NULL,
	FOREIGN KEY (cno) REFERENCES customers (cno),
	FOREIGN KEY (eno) REFERENCES employees (eno)');
	
$dbh->createTable('odetails',
	'ono bigint(5) NOT NULL,
	pno bigint(5) NOT NULL,
	qty int(11) NOT NULL,
	PRIMARY KEY (ono,pno),
	foreign key (ono) references orders (ono),
	foreign key (pno) references parts (pno)');
?>

    <br>...done.
  </body>
</html>
