<?php // Example 26-1: functions.php
  $dbhost  = 'localhost';    // Unlikely to require changing
  $dbname  = 'bagshop';   // Modify these...
  $dbuser  = 'user';   // ...variables according
  $dbpass  = 'pass';   // ...to your installation

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

function insertTable($name, $ename, $zip, $hdate)
  {
    queryMysql("INSERT INTO $name SET
					ename = '$ename',
					zip = '$zip',
					hdate = '$hdate' ");
    echo "Data inserted in Table '$name'.<br>";
  }
  
?>
