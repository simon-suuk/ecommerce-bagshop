<?php

include_once('DatabaseHelper.php');

$q=$_GET["q"];
if (strlen($q)>0) {

$obj = new DatabaseHelper();
$obj->search($q, 'customers');

$row=$obj->fetch();
while($row){
	
	echo"<table>
  <tr>
    <th>Customers</th>
    <th>Street</th>
  </tr>
  <tr>
    <td>{$row['firstname']} {$row['lastname']}</td>
    <td>{$row['street']}</td>
  </tr>
</table>";
    $row=$obj->fetch();
}
}

?>