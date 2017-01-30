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
	$parts='employees';
	$name=$_REQUEST['search'];
	$result=$obj->search($name, $parts);
}
	$row=$obj->fetch();
	while($row){
	echo $row["ename"];
	$row=$obj->fetch();
	}
?>

</body>
</html>