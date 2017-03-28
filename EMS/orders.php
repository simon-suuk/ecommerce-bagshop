<!doctype html>
<html lang="en">
<head>
<title>Admin | Add</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
    <script type="text/javascript" src="../js/superfunctions.js"></script>
    <script type="text/javascript" src="../js/jquery-1.12.2.js"></script> 
<!-- /css files -->
</head>
<body>
    <div class="main">
        <a href="index.php"><img src="../images/home/BagShop.png" alt="company logo" width="160px" height="130px"></a>
        <h1>Department Store</h1>
    </div>
    
<div class="form_layout">
				
<h1>Report</h1>

<div class="column" style="background-image:url('images/stats.jpg');padding:22px;height:300px;
background-repeat: no-repeat
">

    <div  style="display:inline-block;margin-right:45px;color:black;font-size:15px;">Select period:</div>
<div style="display:inline-block;width:160px;margin-right:45px">
<select id="period" name="period" onchange="choose()">
<option value="" disabled selected>------</option>
<option value="day">day</option>
<option value="week">week</option>
<option value="month">month</option>
</select></div>
<!--<button name="validate" style="background:orange;color:white" onClick="choose()"> Show</button>-->

<div style="margin-top:20px;font-size:26px;color:white;"><span style="background-color:white;border-radius:6px;margin:5px;color:orange" id="result"></span></div>
</div>


<?php

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
</div>

</body>
</html>