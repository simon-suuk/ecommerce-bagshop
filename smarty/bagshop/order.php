<?php
	//echo "entered order file";
	
	require '../libs/Smarty.class.php';
	
	// create object
	$smarty = new Smarty;
	
	// checking if session has started
	session_start();

	// checking to see if session contains the user id
	if(!isset($_SESSION['CUSTOMER'])){
		//echo "session 4 cust not set";
		$smarty->display('login.tpl');
		exit();
	}
	
	/*if(isset($_SESSION['CUSTOMER'])){
		echo "session 4 cust set....proceeding";
	}*/
	
	// assign some content. This would typically come from
	// a database or other source
	$smarty->assign('order_info', '');
	
	include_once("DatabaseHelper.php");

	if(isset($_REQUEST['submit'])){
		//echo "entered if 4 processing";
		
		$cno = $_REQUEST['cno'];
		$eno = $_REQUEST['eno'];
		$pno = $_REQUEST['pno'];
		$qty = $_REQUEST['qty'];
		$shipped = date("Y-m-d H:i:s");
		$received = date('Y-m-d H:i:s', strtotime($shipped. ' + 7 days'));
	    
		$diff = abs(strtotime($received) - strtotime($shipped));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		$order_info = "Your order has been successfully placed! You will receive your order on ". $received. ". That is in ". $days . " days. Thank you.";
		//printf("%d years, %d months, %d days\n", $years, $months, $days);
		
		$dbhOrd = new DatabaseHelper();
		$r=$dbhOrd->addOrder($cno,$eno,$received,$shipped,$pno,$qty);

		if($r==false){
			$smarty->assign('order_info', 'error while adding order');
			$smarty->display('order.tpl');
		}else{
			$smarty->assign('order_info', $order_info);
			$smarty->display('order.tpl');
		}
	}
	
	/*$dbhPart = new DatabaseHelper();
	$dbhPart->getAllParts();
	$partsId = Array(); 
	$partsName = Array(); 
	while($row = $dbhPart->fetch()){
		$partsId[] = $row["pno"];
		$partsName[] = $row["pname"];
	}
	
	$smarty->assign('partsId', $partsId);
	$smarty->assign('partsName', $partsName);
	//print_r($partsId);
	//print_r($partsName);
	//echo "-----------------------------------------------------------------";
	
	$dbhCust = new DatabaseHelper();
	$dbhCust->getAllCustomers();
	$customersId = Array(); 
	$customersName = Array(); 
	while($row = $dbhCust->fetch()){
		$customersId[] = $row["cno"];
		$customersName[] = $row["firstname"]." ".$row["lastname"];
	}
	
	$smarty->assign('customersId', $customersId);
	$smarty->assign('customersName', $customersName);
	//print_r($customersId);
	//print_r($customersName);*/

	// display it
	