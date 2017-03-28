<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin | Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

</head>
<!--/head-->

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
				header("Location:orderList.php");
			}
		}
		
	}
}	
	?>
        <div class="form-w3ls">
            <section id="form">
                <!--form-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-3">
                            <div class="login-form">
                                <!--login form-->
                                <h2 style="color:black; font-size:25px;">Login to your account</h2>
                                <form>
                                    <input type="text" name="username" placeholder="username" />
                                    <input type="password" name="pword" placeholder="Password" />

                                    <button type="submit" class="btn btn-default" value="submit" name="submit">Login</button>
                                </form>
                            </div>
                            <!--/login form-->
                        </div>
                    </div>
                </div>
                <!--/form-->
            </section>
        </div>


</body>

</html>
