<!DOCTYPE html>
<html>
<head>
	<title>Admin |List</title>
</head>
<body>
<div>
	<?php
include_once("DatabaseHelper.php");
$obj=new DatabaseHelper();
$result=$obj-> selectEmp();

echo"<table><tr><th>Name</th><th>Date Hired</th></tr>";
while($row=$obj->fetch()){
	echo"<tr>
		<td>{row['fname'] ['lname']}</td>
		<td>{row['hdate']}</td>
	</tr>";
}
echo "</table>";
?>
</div>
</body>
</html>