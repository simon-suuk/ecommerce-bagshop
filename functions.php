<?php // Example 26-1: functions.php
  $dbhost  = 'localhost';    // Unlikely to require changing
  $dbname  = 'bagshop';   // Modify these...
  $dbuser  = 'root';   // ...variables according
  $dbpass  = '';   // ...to your installation
  

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }
   
  function insertCustomer($cname,$street,$zip,$phone){
	  
	  queryMysql("insert into customers(cname,street,zip,phone) values('$cname','$street',$zip,'$phone');");
	  echo "Customer '$cname' was created";
  }
?>
