<!--The CSS and framework is Sourced from W3layout
A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Admin | Edit</title>
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

<?php
	include_once("../DatabaseHelper.php");
			$obj=new databaseHelper();

				if(isset($_REQUEST['FIRSTNAME'])){

					$fname=$_REQUEST['FIRSTNAME'];
					$lname=$_REQUEST['LASTNAME'];
					$zip=$_REQUEST['ZIP'];
					$hdate=$_REQUEST['DATE_HIRED'];
					$eno=$_REQUEST['ENO'];
					
					if (isset($_REQUEST['submit'])){
					$r=$obj->editEmployee($eno,$fname,$lname,$zip,$hdate, $username, $pword);
					header("Location:emplist.php");
				}
			}
	?>
	
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

<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="#" method="post">
			<div class="content-wthree1">
					<div class="form-control"> 
						<label class="header">First Name <span>:</span></label>
						<input type="text" id="name" name="FIRSTNAME" value='<?php echo $fname?>'>
					</div>		
					<div class="form-control">	
						<label class="header">Last Name <span>:</span></label>
						<input type="text" id="name" name="LASTNAME"value='<?php echo $lname?>'>
					</div>	
					<div class="form-control"> 
						<label class="header">City<span>:</span></label>
						<input type="text" id="name" name="ZIP" value='<?php echo $zip?>'>
					</div>
					<div class="form-control"> 
						<label class="header">Date Hired<span>:</span></label>
						<input type="text" id="name" name="DATE_HIRED"value='<?php echo $hdate?>'>
					</div>
					<div class="form-control"> 
						<label class="header">Username<span>:</span></label>
						<input type="text" id="name" name="orgn" placeholder="Username">
					</div>
                    <div class="form-control"> 
						<label class="header">Password<span>:</span></label>
						<input type="password" id="name" name="orgn" placeholder="Password">
					</div>
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
