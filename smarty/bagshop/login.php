<?php
	$part_name ='';
	$part_no ='';
		
	require '../libs/Smarty.class.php';

	// create object
	$smarty = new Smarty;

	// assign some content. This would typically come from
	// a database or other source
	include_once("DatabaseHelper.php");
	$dbh = new DatabaseHelper();

	if(isset($_POST['submit'])){
		//echo "entered login submit";
	
		$username = $_REQUEST['username'];
		$password = $_REQUEST['passwd'];
		
		$authenticate=$dbh->custLogin($username, $password);

		if (!$authenticate) {
			$smarty->assign('message', 'failed');
			$smarty->display('login.tpl');
			exit();
		}

		$row = $dbh->fetch();
		if (!$row) {
			$smarty->assign('message', 'invalid credentials');
			$smarty->display('login.tpl');
		} else {
			// starting the session
			session_start();
            
			//storing user details in session
			$_SESSION['CUSTOMER'] = $row;
			
			$emp=$dbh->getEmployee(3);
			$emp_row = $dbh->fetch();
			$_SESSION['EMPLOYEE'] = $emp_row;
			
			echo "prt no...".$part_no;
			$part=$dbh->getPart(2);
			$part_row = $dbh->fetch();
			$_SESSION['PART'] = $part_row;
		
			print_r($_SESSION['PART']);
			
			$smarty->assign('order_info', '');
			$smarty->display('order.tpl');
		}
		exit();
        }else{
		//echo "not submitted...get part details";
		$part_name = $_REQUEST['part_name'];
		$part_no = $_REQUEST['part_no'];
		
		$smarty->display('login.tpl');
	}