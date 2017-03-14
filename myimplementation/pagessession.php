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
function getip(){	
	  $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
return $ipaddress;
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