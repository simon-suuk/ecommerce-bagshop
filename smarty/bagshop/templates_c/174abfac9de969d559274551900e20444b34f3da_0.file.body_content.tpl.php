<?php
/* Smarty version 3.1.30, created on 2017-03-28 06:21:06
  from "C:\Web_Apps\e-com\smarty\bagshop\templates\body_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da00d2dc4581_48132144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174abfac9de969d559274551900e20444b34f3da' => 
    array (
      0 => 'C:\\Web_Apps\\e-com\\smarty\\bagshop\\templates\\body_content.tpl',
      1 => 1490682039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da00d2dc4581_48132144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <body>
	
		<?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
	
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
                <a href="index.php"><img src="images/home/BagShop.png" alt="" width="130" height="75"/></a>
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
                  <!--blog section-->
                  <li><a href="http://www.purseblog.com/">Blog</a>
                    
                  </li>
					<!--product section-->
                  <li class="dropdown"><a href="#">Product Report<i class="fa fa-angle-down"></i></a>
				  <ul role="menu" class="sub-menu">
                      <li><a href="test101.php" class="active" >Download Report in Pdf</a></li>
                      <li><a href="report.php">Download Report in CSV</a></li>
                      <li><a href="product_report.php" >Product Charts</a></li>
					  </li>
                    </ul>
					</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="search_box pull-right">
                <form>
                  <input type="text" size="30" onkeyup="showResult(this.value)">
                  <div id="livesearch"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-bottom-->
    </header><!--/header-->
	
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178858da00d2dc2b35_29769721', 'body');
?>

	<?php }
/* {block 'body'} */
class Block_178858da00d2dc2b35_29769721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Body<?php
}
}
/* {/block 'body'} */
}
