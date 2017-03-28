<?php
	require '../libs/Smarty.class.php';
  
	// create object
	$smarty = new Smarty;
  
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
	
	//display
	$smarty->display('product_report.tpl');
  ?>