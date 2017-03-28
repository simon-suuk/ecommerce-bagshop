<?php
  require '../libs/Smarty.class.php';
  
  // create object
  $smarty = new Smarty;
  
  // assign some content. This would typically come from
  // a database or other source
  include_once("DatabaseHelper.php");
  $dbh = new DatabaseHelper();
  $dbh->getAllParts();
  
  $parts = Array(); 
  while($row = $dbh->fetch())
  	$parts[] = $row;
  
  $smarty->assign('parts', $parts);
  $smarty->assign('dollarSign', '$');
  $smarty->assign('tempImage', 'images/home/');
  $smarty->assign('imgFormat', '.jpg');
  
  
  // display it
  
  
  /*visits*/
  error_reporting(E_ERROR | E_PARSE);
                session_start();
if (isset($_SESSION['visits'])){
//	$dates= array();
	
	$actualdate = date('d-m-y H:i');
	$storevisits = $_SESSION['visits'];
	$storeddate =  $_SESSION['date'];
	if($actualdate!=$storeddate){
	$_SESSION['date'] = date('d-m-y H:i');
	$count =1;
	$_SESSION['visits'] = $count;
	}else{
		
	$count =  $_SESSION['visits'];
     $count++;
	 $_SESSION['visits']=$count;
	 
	}	
}else{
	$count=0;
$_SESSION['visits'] = ++$count;
//$dates = array();
$today = date('d-m-y H:i');
$_SESSION['date'] = $today;
}

$smarty->display('index.tpl');
 
  ?>