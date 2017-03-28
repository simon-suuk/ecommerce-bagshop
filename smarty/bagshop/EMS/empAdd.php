<!-- The CSS and framework is Sourced from W3layout
A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Admin | Add</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<style>
li {
    display: inline;
}
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li a {
    display: block-inline;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
	font-size: 25px;
}

li a:hover {
    background-color: #111111;
}
</style>
<div class="row">
        <div class="col-sm-4">
            <div class="logo pull-left">
                <a href="index.php"><img src="../images/home/BagShop.png" alt="" width="130" height="75" /></a>
            </div>
        </div>
        <div class="col-sm-8">
            <!--div class="pull-right"-->
                <h1 style="font-size:50px;">Department Store</h1>
            <!--/div-->
        </div>
		
    </div>
	<ul>
  <li><a href="orderList.php">Customer Orders</a></li>
  <li><a href="orders.php" >Orders Report</a></li>
</ul>
	<?php
   include_once("../DatabaseHelper.php");
   $object=new databaseHelper();
   if(isset($_REQUEST['fname'])){
   	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
   	$city=$_REQUEST['city'];
	$job=$_REQUEST['job'];
	$username=$_REQUEST['username'];
	$pword=$_REQUEST['pword'];
	$date=date("Y-m-d");
	
	$result=$object->selZip($city);
		if($result==false){
		echo "error with zip";}
		else{
		$row=$object->fetch();
		$zip=$row['zip'];
		//echo $zip;
		}
		
	if($job=="regular"){
			$num=2;
		}
		else{$num=1;}
		
   	if(isset($_REQUEST['submit'])){
   		$result=$object->addEmp($fname,$lname,$zip,$num,$date,$username,$pword);
   		header("Location:empList.php");
   	}
   } 
?>
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="#" method="post">
			<div class="content-wthree1">
				<!--div class="grid-agileits1"-->
					<div class="form-control"> 
						<label class="header">First Name <span>:</span></label>
						<input type="text" id="name" name="fname" placeholder="First Name" >
					</div>
		
					<div class="form-control">	
						<label class="header">Last Name <span>:</span></label>
						<input type="text" id="name" name="lname" placeholder="Last Name" >
					</div>
	
					<div class="form-control"> 
						<label class="header">Job Title <span>:</span></label>
						<input type="text" id="name" name="job" placeholder="enter regular/ adminstrative">
					</div>
					<div class="form-control"> 
						<label class="header">City<span>:</span></label>
						<input type="text" id="name" name="city" placeholder="City">
					</div>
					<div class="form-control"> 
						<label class="header">Username<span>:</span></label>
						<input type="text" id="name" name="username" placeholder="Username">
					</div>
                    <div class="form-control"> 
						<label class="header">Password<span>:</span></label>
						<input type="text"id="name" name="pword" placeholder="Password">
					</div>
				<!--/div-->
            </div>
            	
			<div class="content-wthree4">	
				<div class="form-control">
                    <br>
					<button type="submit" class="register" value="submit" name="submit">Submit</button>
					
					<div class="clear"></div>
				</div>
			</div>		
		</form>
	</div>
</div>


</body>
</html>
