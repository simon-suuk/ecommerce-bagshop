<?php
$file = fopen("test.txt","w");

$file_content = "";
$separator = ";";
$escape = "\n";

include_once("DatabaseHelper.php");
$dbh = new DatabaseHelper();
$dbh->getAllParts();

while($row = $dbh->fetch()){
	$file_content .= $row["pname"].$separator.$row["qno"].$separator.$row["price"].$escape;
}

echo fwrite($file, $file_content);
fclose($file);

   header("Location: test101.php");
   exit;
?>