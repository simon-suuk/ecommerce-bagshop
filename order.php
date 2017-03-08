<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Order | BagShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script>
         function showResult(str) {
           if (str.length==0) { 
             document.getElementById("livesearch").innerHTML="";
             document.getElementById("livesearch").style.border="0px";
             return;
           }
           if (window.XMLHttpRequest) {
             // code for IE7+, Firefox, Chrome, Opera, Safari
             xmlhttp=new XMLHttpRequest();
           } else {  // code for IE6, IE5
             xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
           }
           xmlhttp.onreadystatechange=function() {
             if (this.readyState==4 && this.status==200) {
               document.getElementById("livesearch").innerHTML=this.responseText;
               document.getElementById("livesearch").style.border="1px solid #A5ACB2";
             }
           }
           xmlhttp.open("GET","w3schoolsAJAX.php?q="+str,true);
           xmlhttp.send();
         }
      </script>
</head>
<!--/head-->

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
                                <li><a href=""><i class="fa fa-phone"><i class="fa fa-phone"></i> +233541784079</a></li>
                           <li><a href="#"><i class="fa fa-envelope"></i> bagShop@gmail.com</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
                            <a href="index.php"><img src="images/home/BagShop.png" alt="" /></a>
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
                                <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                                <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="order.php" class="active"><i class="fa fa-crosshairs"></i> Order</a></li>
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
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="order.php" class="active">Order</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="active">Admin<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shopCustomerAdd.php" class="active" >Add customer</a></li>
										<li><a href="shopEmployeeAdd.php">Add employee</a></li> 
										<li><a href="shopPartsadd.php" >Add part</a></li> 
										
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Order</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <?php
                if(isset($_POST['submit'])){

                    $cno = $_REQUEST['cno'];
                    $password = $_REQUEST['passwd'];
                    $eno = $_REQUEST['eno'];
                    $pno = $_REQUEST['part'];
                    $qty = $_REQUEST['qty'];
                    $received = "";
                    $shipped = "";

                    include_once("DatabaseHelper.php");
                    $dbhObj = new DatabaseHelper();
                    $r=$dbhObj->addOrder($cno,$eno,$received,$shipped,$pno,$qty);

                    if($r==false){
                        echo "error while adding order";
                    }else{
                        
                    }
                }
            ?>


                <div class="shopper-informations">
                    <div class="row">
                        <form action="" method="POST">

                            <p>Customer Information</p>
                            <input type="number" placeholder="Customer's Number" name="cno" value="">
                            <input type="password" placeholder="Password" name="passwd" value="">


                            <p>Employee Information</p>

                            <input type="number" placeholder="Employee's Number" name="eno" value="">

                            <select name="part">
                                <?php
                                    include_once("DatabaseHelper.php");
                                    $dbh = new DatabaseHelper();
                                    $dbh->getAllParts();

                                    echo "<option value = '-1'>-- select part --</option>";
                                    while($row = $dbh->fetch()){
                                        echo "<option value = {$row["pno"]}>{$row["pname"]}</option>";
                                    }
                                ?>
                            </select>

                            <input type="number" placeholder="Quantity Demanded" name="qty" value="">

                            <!--a class="btn btn-primary" href="">Make Order</a-->
                            <input class="btn btn-primary" type="submit" name="submit" value="Make Order" />
                        </form>


                        <div class="col-sm-4">
                            <div class="order-message">
                                <p>Order Notification</p>
                                <textarea name="message" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--/#cart_items-->



    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quick Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privecy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Billing System</a></li>
                                <li><a href="">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About BagShop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Affillate Program</a></li>
                                <li><a href="">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About BagShop</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from
                                    <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 BagShop Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>