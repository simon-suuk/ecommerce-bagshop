<?php
/* Smarty version 3.1.30, created on 2017-03-28 12:12:47
  from "C:\xampp\htdocs\finaltest\smarty\bagshop\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da371fd2dc75_20084488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935cfecefab15ccd9c8659838f7a2739399894be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\finaltest\\smarty\\bagshop\\templates\\footer.tpl',
      1 => 1490662520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da371fd2dc75_20084488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer id="footer">
  <!--Footer-->
  <div class="footer-widget">
    <div class="container">
      <div class="row">
      </div>
		<center>
		<img src="images/home/visitor.jpg" alt="visitors">
		<br>
		<h1><?php echo $_SESSION['visits'];?>
</h1>
		</center>
    </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright � 2017 BagShop Inc. All rights reserved.</p>
            <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
      </div>
    </div>
  </div>
</footer>
<!--/Footer-->
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/price-range.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html>		<?php }
}