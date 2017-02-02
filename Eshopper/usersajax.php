<?php
	//check command
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	include("DatabaseHelper.php");
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			addUser();		//if cmd=1 the call delete
			
			break;
		case 2:
			addPart();	//if cmd=2 the change status
			break;
		case 3:
		     addCustomer();
		case 4:
			addOrder();
			break;
		default:
			echo "wrong cmd";	//change to json message
			break;
	}
	
	function addUser(){
		
		
		$EName=$_REQUEST['EName'];
		$EZip =$_REQUEST['EZip'];
		$EDate = $_REQUEST['EHire'];
		
		$obj=new DatabaseHelper();
		$obj->addEmployee($EName,$EZip,$EDate);
		
		}
	function addCustomer(){
		$CName=$_REQUEST['CName'];
		$CStreet =$_REQUEST['CStreet'];
		$CZip =$_REQUEST['CZip'];
		$CPhone = $_REQUEST['CPhone'];
		
		$obj= new DatabaseHelper();
		$obj->addCustomer($CName,$CStreet,$CZip,$CPhone);
		
		
	}
    function addPart(){
      $partName=$_REQUEST['partName'];
	  $partZip=$_REQUEST['partZip'];
	  $partPrice=$_REQUEST['partPrice'];
	  $partLevel=$_REQUEST['partLevel'];
	  
	  $obj=new DatabaseHelper();
		$obj->addPart($partName,$partZip,$partPrice,$partLevel);
		
		
		
		
	}
	
	 function addOrder(){
      $cNo=$_REQUEST['cNo'];
	  $eNo=$_REQUEST['eNo'];
	  $orderShipped=$_REQUEST['orderShipped'];
	  $orderReceived=$_REQUEST['orderReceived'];
	  
	  $obj=new DatabaseHelper();
		$obj->addOrder($cNo,$eNo,$orderShipped,$orderReceived);
		
		
		
		
	}

	

?>