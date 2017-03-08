<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | BagShop</title>
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
    <!--SCRIPT FOR THE SEARCH FUNCTION-->
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
                      <li><a href="report.php">Download Report in CSV</a></li>
                      <li><a href="Product_Chart.php" >Product Charts</a></li>
					  </li>
                    </ul>
					</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="search_box pull-right">
                <!--form action="" method="post">
                  <input type="search" placeholder="Search"/>
                  </form-->
                <form>
                  <input type="text" size="30" onkeyup="showResult(this.value)">
                  <div id="livesearch"></div>
                </form>
                <?php
                  include_once("DatabaseHelper.php");
                  $obj=new DatabaseHelper();
                  if (isset($_REQUEST['search'])) {
                      $parts='parts';
                      $name=$_REQUEST['search'];
                      $result=$obj->search($name, $parts);
                  }
                  
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-bottom-->
    </header>
    <!--/header-->
    <section id="slider">
      <!--slider-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>The right bag for the right occasion</h2>
                    <p>Luxurious School bags for all age groups. We know what you want and we deliver just as you like it</p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/slide_1.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>100% Responsive Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>Browse through our catalog</h2>
                    <p>We have a wide range of bags for the whole family </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/family bags.jpg" class="girl img-responsive" alt=""/>
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>
              </div>
              <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              </a>
              <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/slider-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="left-sidebar">
              <h2>Category</h2>
              <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Sports Bags
                      </a>
                    </h4>
                  </div>
                  <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">Golf Bags </a></li>
                        <li><a href="#">Bowling Bags </a></li>
                        <li><a href="#">Tennis Bags </a></li>
                        <li><a href="#">Football Bags</a></li>
                        <li><a href="#">Basketball </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Mens
                      </a>
                    </h4>
                  </div>
                  <div id="mens" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">wallet</a></li>
                        <li><a href="#">briefcase</a></li>
                        <li><a href="#">suitcase</a></li>
                        <li><a href="#">leather bags</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Women
                      </a>
                    </h4>
                  </div>
                  <div id="womens" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">Hobo</a></li>
                        <li><a href="#">Satchel</a></li>
                        <li><a href="#">tote</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Travelling Bags</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">School bags</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Purse</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Accessories</a></h4>
                  </div>
                </div>
              </div>
              <div class="price-range">
                <!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                  <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                  <b class="pull-left">$ 50</b> <b class="pull-right">$ 300</b>
                </div>
              </div>
              <!--/price-range-->
              <div class="shipping text-center">
                <!--shipping-->
                <img src="images/home/shipping.jpg" alt="" />
              </div>
              <!--/shipping-->
            </div>
          </div>
          <div class="col-sm-9 padding-right">
            <div class="features_items">
              <!--features_items-->
              <h2 class="title text-center">Features Items</h2>
              
              <?php
                include_once("DatabaseHelper.php");
                $dbh = new DatabaseHelper();
                $dbh->getAllParts();
                
                $dollarSign = "$";
                $tempImage = "images/home/";
                $imgFormat = ".jpg";
                
                while($row = $dbh->fetch()){
                    $partImage = $tempImage . $row["pname"]. $imgFormat;
                    $price = $dollarSign . $row["price"];
                    
                    echo "<div class='col-sm-4'>
                            <div class='product-image-wrapper'>
                                <div class='single-products'>
                                    <div class='productinfo text-center'>
                                        <img src=$partImage alt='' />
                                        <h2>$price</h2>
                                        <p>{$row["pname"]}</p>
                                        <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                    </div>
                                    <div class='product-overlay'>
                                        <div class='overlay-content'>
                                            <h2>$price</h2>
                                            <p>{$row["pname"]}</p>
                                            <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class='choose'>
                                    <ul class='nav nav-pills nav-justified'>
                                        <li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>
                                        <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>";
                }
                ?>
            </div>
            <!--features_items-->
            <div class="category-tab">
              <!--category-tab-->
              <div class="col-sm-12">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                  <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                  <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                  <li><a href="#kids" data-toggle="tab">Kids</a></li>
                  <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade active in" id="tshirt" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="blazers" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sunglass" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="kids" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="poloshirt" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/category-tab-->
            <div class="recommended_items">
              <!--recommended_items-->
              <h2 class="title text-center">recommended items</h2>
              <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>			
              </div>
            </div>
            <!--/recommended_items-->
          </div>
        </div>
      </div>
    </section>
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
                  <li><a href="#">Online Help</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Order Status</a></li>
                  <li><a href="#">Change Location</a></li>
                  <li><a href="#">FAQ’s</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Quick Shop</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">T-Shirt</a></li>
                  <li><a href="#">Mens</a></li>
                  <li><a href="#">Womens</a></li>
                  <li><a href="#">Gift Cards</a></li>
                  <li><a href="#">Shoes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Policies</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privecy Policy</a></li>
                  <li><a href="#">Refund Policy</a></li>
                  <li><a href="#">Billing System</a></li>
                  <li><a href="#">Ticket System</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>About BagShop</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Company Information</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Store Location</a></li>
                  <li><a href="#">Affillate Program</a></li>
                  <li><a href="#">Copyright</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
              <div class="single-widget">
                <h2>About BagShop</h2>
                <form action="#" class="searchform">
                  <input type="text" placeholder="Your email address" />
                  <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                  <p>Get the most recent updates from <br />our site and be updated your self...</p>
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
    <!--/Footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>