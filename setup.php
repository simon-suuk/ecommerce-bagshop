<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('customers',
              'cno BIGINT(5),
              cname VARCHAR(30),
              street VARCHAR(30).
			  zip DECIMAL(5,0),
			  phone CHAR(12)
			  )');
			  
		
	insertCustomer("Ephraim Ayite",
			"Boulervard du Zio",
			332,
			"002335467665");
  
?>

    <br>...done.
  </body>
</html>
