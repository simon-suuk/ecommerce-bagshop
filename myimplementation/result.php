

<html>
<head><title></title>
<script type="text/javascript" src="functions.js"></script>
<script type="text/javascript" src="jquery-1.12.2.js"></script>
</head>
<h1>Orders statistics</h1>
Select period:<select id="period" name="period">
<option value="day">day</option>
<option value="week">week</option>
<option value="month">month</option>
</select>
<button name="validate" onClick="choose()"> Show</button>
<div>Number of orders:<span id="result"></span></div>

<?php
if(!isset($_SESSION)){ session_start();    }

//$var = $_SERVER['SERVER_ADDR'];
//echo :

$sb = mysqli_connect('localhost','root','root','bags');
//$sb->query("insert into testers set name='rosy', datespan ='".date('Y-m-d H:i:s', time()));
$todaydate = date('d',time());
  $todaymonth = date('m',time());
  $todayyear = date('y',time());
$queryday = "select count(Ono) from orders where YEAR(datepan) ='$todayyear' ";
$queryday = "select count(Ono) from orders where MONTH(datespan)='$todaymonth'";
$queryday = "select count(Ono) from orders where DAY(datespan)='$todaydate'";

if(isset($_REQUEST['validate'])){
	
	echo "<div>Success</div>" ;
}


?>
</html>