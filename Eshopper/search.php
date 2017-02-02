<!DOCTYPE html>
<html>
<body>

<form action="search.php" method="POST">
  Bag search:
  <input type="search" name="search">
  <input type="submit">
</form>
<?php

include_once("DatabaseHelper.php");
$obj=new DatabaseHelper();
if (isset($_REQUEST['search'])) {
	$result=$obj->search($_REQUEST['search']);
}

if($result==false){
	echo "The item you are searching for is not available";
}
else{
	$row=$obj->fetch();
	while($row){
	echo $row["pname"];
	$row=$obj->fetch();
	}
}
?>

</body>
</html>