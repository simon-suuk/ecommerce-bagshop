<?php

include_once('DatabaseHelper.php');

$q=$_GET["q"];
if (strlen($q)>0) {

$obj = new DatabaseHelper();
$obj->search($q, 'parts');

$row=$obj->fetch();
while($row){
  echo"<table>
  <tr><td>{$row['pname']}</td>
    <td>{$row['price']}</td>
    </tr></table>";
    $row=$obj->fetch();
}
}
 /*
if ($row=="") {
  $response="no suggestion";
} else {
  $response=$row;
}*/

?>