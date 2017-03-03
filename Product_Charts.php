<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Chart |BagShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

  <style>
#main ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

#main li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

#main li a:hover {
    background-color: #111111;
}
</style>
</head>
<body>

<header id="header">
      <!--header-->
      <div class="header_top">
        <!--header_top-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="contactinfo">
                <ul class="nav nav-pills">
                  <li><a href="#"><i class="fa fa-phone"></i> +233541784079</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i> bagShop@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="social-icons pull-right">
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header_top-->
      <div class="header-middle">
        <!--header-middle-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="logo pull-left">
                <a href="index.php"><img src="images/home/BagShop.png" alt="" width="130"; height="55";"/></a>
              </div>
              <div class="btn-group pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  GHANA
                  <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">NIGERIA</a></li>
                    <li><a href="#">UK</a></li>
                    <li><a href="#">CHINA</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  GHS
                  <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Dollar</a></li>
                    <li><a href="#">Pound</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                  <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                  <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                  <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                  <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-middle-->
      <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
              </div>
              <div class="mainmenu pull-left">
                <ul class="nav navbar-nav collapse navbar-collapse">
                  <li><a href="index.php" class="active">Home</a></li>
                  <li class="dropdown">
                    <a href="#">Shop<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="shop.html">Products</a></li>
                      <li><a href="product-details.html">Product Details</a></li>
                      <li><a href="order.php">Order</a></li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="login.html">Login</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#">Blog<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="blog.html">Blog List</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="active">Admin<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="shopCustomerAdd.php" class="active" >Add customer</a></li>
                      <li><a href="shopEmployeeAdd.php">Add employee</a></li>
                      <li><a href="shopPartsadd.php" >Add part</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Product Report<i class="fa fa-angle-down"></i></a>
				  <ul role="menu" class="sub-menu">
                      <li><a href="test101.php" class="active" >Download Report in Pdf</a></li>
                      <li><a href="#">Download Report in CSV</a></li>
                      <li><a href="Product_Chart" >Product Charts</a></li>
					  </li>
                    </ul>
					</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-bottom-->
    </header>
<!--List of links on the page-->
<div id="main"><ul>
  <li><a href="groupBar.php">PHP Bar Chart</a></li>
  <li><a href="groupWork.php">PHP Pie Chart</a></li>
  <li><a href="#">JavaScript Pie Chart</a></li>
  <li><a href="#">JavaScript Bar Chart</a></li>
</ul><div>

</body>
</html>


