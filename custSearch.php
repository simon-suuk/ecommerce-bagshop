<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
  Customer:
  <input type="search" name="search">
  <input type="submit">
</form>
<?php

include_once("DatabaseHelper.php");
$obj=new DatabaseHelper();
if (isset($_REQUEST['search'])) {
	$parts='customers';
	$name=$_REQUEST['search'];
	$result=$obj->search($name, $parts);
}
	$row=$obj->fetch();
	while($row){
	echo $row["cname"];
	$row=$obj->fetch();
	}
?>

</body>
</html>