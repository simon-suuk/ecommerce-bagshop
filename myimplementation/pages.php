<!DOCTYPE html>

<html>
<head>
<title>Report</title>
</head>
<body>

<h1>Show by month</h1>
Numbers of visits today is: 
<?php
//include("../DatabaseHelper.php");
class IP{
	
function __constructor(){
	
	
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
	
	
	
	
	
}
 
 // $helper = new DatabaseHelper();
  $ip = new IP();
  $ip->getip();
  
$numVisit = 0;
$lastVisit;
$currentdate =  date("d-m-Y H:i");
$iparray=array();
$go;
$ips=array();
// if cookie is set for the variable,check with query if there is something in the table with the current IP and most recent date
if(isset($_COOKIE['lastVisit'])&&isset($_COOKIE['ips'])){
	$ipp = new IP();
$lastVisit = $_COOKIE['lastVisit'];
$ips = $_COOKIE['ips'];
//when ips are discovered in a day from various pcs, they are stored if not existant already
if($lastVisit==date("d-m-Y H:i")){//if date() ==most recent row['date']  or lastvisit_fetched, perform an insert with current IP
	$ipadd = $ipp->getip();       //store equivalent ip in a variable
	//echo $ipadd;
   if (!in_array($ipadd, $iparray)){//if select * from addresses where ip = currentip is negative	
   array_push($iparray,$ipadd);    //insert new IP address with date
   //echo "Results from pushing are:";
   echo print_r($iparray);
   }
}else{ //here ip address is stored when a new day has begun
	$ips=array();                  
	
	$ipadd = $ipp->getip();
	array_push($ips,$ipadd);
}
}

if(isset($_COOKIE['ips'])){ //check if ip address exist in the table
	$arrayip= $_COOKIE['ips']; 
	
	//gives slashes when displayed
	$arrayip=stripslashes($arrayip);
	$resultarray =json_decode($arrayip,true);
	echo"The number of visitors is:";
	//echo count($resultarray);
	
}
$number=count($ips);

if($number==0){
	echo "1 first";
}else{
	echo $number;
}
 
setcookie('lastVisit', date("d-m-Y H:i"),  time()+3600); //insert into table the new value for last visit
// show the respected values
$ipss = json_encode($ips);

setcookie('ips', $ipss,  time()+3600);   //insert ip new value
 
 
 ?>


</body>


</html>