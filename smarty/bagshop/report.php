<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=bagsreport.csv');

class CSV {
function __constructor(){
	
	
}
function savebags(){

$output = fopen('php://output','w');
 $sql = mysqli_connect('35.166.18.143','adwoba.bota','9c2865b668c4772a','db__adwoba_bota');
// if(!$sql->connect()){
	// echo "error spotted";
	 
 //} else{
	 $result = $sql->query("select * from bags");
	 if($result){//echo "success";}else{echo "failure";}
	 $name=array();
	 $num=array();
 }
while($row = $result->fetch_assoc()){
	array_push($name,$row['types']);
	array_push($num,$row['bno']);
}
fputcsv($output,array(''));
 fputcsv($output,array('BAGS REPORT'));
 fputcsv($output,array('Type#','types'));
//data = array('Name','Age');
$i=0;
while($i<count($name)){
	
	 fputcsv($output,array($num[$i],$name[$i]));
	$i++;
}
}

 function savecustomers(){

$output = fopen('php://output','w');
 $sql = mysqli_connect('35.166.18.143','adwoba.bota','9c2865b668c4772a','db__adwoba_bota');
// if(!$sql->connect()){
	// echo "error spotted";
	 
 //} else{
	 $result = $sql->query("select * from customers");
	 if($result){//echo "success";}else{echo "failure";}
	 $cno=array();
	 $firstname=array();
	 $lastname = array();
	 $street =array();
	 $zip = array();
	 $phone = array();
 }
while($row = $result->fetch_assoc()){
	array_push($cno,$row['cno']);
	array_push($firstname,$row['firstname']);
	array_push($lastname, $row['lastname']);
	array_push($street, $row['street']);
	array_push($zip, $row['zip']);
	array_push($phone, $row['phone']);
}
fputcsv($output,array(''));
 fputcsv($output,array('CUSTOMERS REGISTERED ON THE SYSTEM'));
 fputcsv($output,array('Registration#','firstname','lastname','street','zip','phone'));
//data = array('Name','Age');
$i=0;
while($i<count($zip)){
	//$phone[$i]=$phone[$i]+"";
	 fputcsv($output,array($cno[$i],$firstname[$i],$lastname[$i],
	 $street[$i],$zip[$i],$phone[$i]));
	$i++;
}
}

 }
 
//fputcsv($output,$data);
 $csv = new CSV();
$csv->savebags();
 $csv->savecustomers();

?>