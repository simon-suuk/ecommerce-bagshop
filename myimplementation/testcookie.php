<?php
include "ips.php";

session_start();
/**
if(isset($_COOKIE['testcookie'])){
	
	echo "<div>hurray, was able to identify you as visitor that came already</div>";
	$myarray = $_COOKIE['testcookie'];
	$myarray = stripslashes($myarray);
	$myarray  = json_decode($myarray,true);
	print_r($myarray);
	$_SESSION['users'];
	
}else{
	echo "<div>now coming</div>";
	$ip = getUserIP();
     $num = rand(1,1000);
	//setcookie('test',num);
	//echo $num;
	$first = array("ip"=>$ip,"number"=>$num);
	 
	$array = array();
	array_push($array,$first);
	print_r($array);
	$array = json_encode($array);
	setcookie('testcookie',$array,time()+3600, "/", "", 0);
	$_SESSION['users']= $array;
}

**/

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
    
	echo "Now the number on ".$_SESSION['date']." with a number of visits of;".$_SESSION['visits'];
	
	
}else{
	$count=0;
$_SESSION['visits'] = ++$count;
//$dates = array();
$today = date('d-m-y H:i');
$_SESSION['date'] = $today; 	
	echo "First time visit on".$_SESSION['date']." with a number of visits of;".$_SESSION['visits'];
	
}


?>