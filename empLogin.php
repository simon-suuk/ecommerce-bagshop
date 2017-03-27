<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
        
</head><!--/head-->

<body>
	<div class="main">
	<a href="index.php"><img src="images/BagShop.png" alt="company logo" width="160px" height="130px"></a>
        <h1>Department Store</h1>
    </div>
	<?php
	include_once("DatabaseHelper.php");
	$obj= new DatabaseHelper();
	$r='';
if(isset($_REQUEST['username'])){
	$username=$_REQUEST['username'];
	$pword=$_REQUEST['pword'];
	
	print_r($_REQUEST);
	if(isset($_REQUEST['submit'])){
		$r=$obj->empLogin($username,$pword);
		//echo $r;
	}
		//echo $r;
	if(!$r){
		echo "there is a problem here";
	}
	else{
		while($row=$obj->fetch()){
			print_r($row);
		$empType=$row['id'];
			if($empType==1){
			header("Location:empList.php");	
			}
			else{
				header("Location:404.html");
			}
		}
		
	}
}	
	?>
	<div class="form-w3ls">
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form >
							<input type="text" name="username" placeholder="Name" />
							<input type="password" name="pword" placeholder="Password" />
							 <!--span>
								<input type="checkbox" class="checkbox" name="Regular"> 
								Regular
								<input type="checkbox" class="checkbox" name="administrator">Admin
							</span-->
							<button type="submit" class="btn btn-default" value="submit" name="submit">Login</button>
						</form>
					</div><!--/login form-->
				</div>
	</section></div><!--/form-->
	
</body>
</html>