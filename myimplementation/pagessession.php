<!DOCTYPE html>

<html>
<head>
<title>Report</title>
</head>
<body>



<?php
include("DatabaseHelper.php");
class IP{
private $helper;
function __constructor(){ 
	
$this->helper=new DatabaseHelper();		
}

/***code copied from stack overflow**/
function getip(){
/**taken from stackiverflow
     http://stackoverflow.com/questions/15699101/get-the-client-ip-address-using-php
***/	 
	   $ipaddress = '';
   /** if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
	
	return $ipaddress;
	**/
	
	$client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$forwardfor = @$_SERVER['HTTP_X_FORWARDED_'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    //return $ip;
	echo $client;
	echo $forward;
	echo $forwardfor;
	echo $remote;
    
}


function storeinfo(){
	//check if visitorid is stored as a cookie
	if (!isset($_COOKIE['visitor'])){
		
		
	}else{
		$ip = $this->getip();
		$value = random(1,50);
		$query= "select * from sessions where visitorid=$value and IP";
		$arrayvisits = $_COOKIE['visitors'];
		$this->helper->insertVisits();
		setcookie("visitor",$value);
		
	}
	$select ="select * from session ";
	
	
	
	
}	
function updateStats(){
	
	
	$this->helper = new DatabaseHelper();
 
  $this->getip();
  
$numVisit = 0;
$lastVisit;
$currentdate =  date("d-m-Y");
$iparray=array();
$go;
$ips=array();


$ipadd = $this->getip(); 
$this->helper->checkExistence();
$result = $this->helper->fetchExistence();

if($result>0){
	//start with the ip and check its date against todays date
	$today = date("Y-m-d");
	$neodate = $this->helper->checkSessionDate($ipadd);
	//print_r($neodate);
	
	//echo $today. " ,, "."$neodate"; 
	if($today==$neodate['date']){
          // echo"found one ffrom today";		
		$this->helper->checkip($ipadd);
		//$helper->checkip("123.32.12");
		$res = $this->helper->fetchip();
		if($res==0){//stores when current ip is not part of todays list
		//echo "not part of the lists, so inserting as new";
			$helper->insertSession($ipadd,$today);
		}
	}else{ //for a new day 
	$today = date("Y-m-d");
	//echo "no stored data for today, being stored";
	$this->helper->insertSession($ipadd,$today);
}
}else{
	$today = date("Y-m-d");
	//echo "first time storage";
	$this->helper->insertSession($ipadd,$today);
} 
   
	
	
	
}	
	
	function showStats(){
	$date =  date("Y-m-d");
	//$toshow=11;
  $toshow = $this->helper->checkVisitsToday($date);
  if($toshow==0){
	   echo "1";
	  }else{ //echo "11";
		  echo $toshow;
		  }}
	
}

$IP = new IP();
//$IP->updateStats();
// $IP->showStats();
 
 

 
 
 ?>


</body>


</html>