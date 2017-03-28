<?php
/* Smarty version 3.1.30, created on 2017-03-28 08:50:08
  from "C:\xampp\htdocs\smarty\bagshop\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da07a0c85881_19070858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c809281c787d4c1909b59c59f3e7c0408968840' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\bagshop\\templates\\login.tpl',
      1 => 1490666182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_temp.tpl' => 1,
  ),
),false)) {
function content_58da07a0c85881_19070858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401158da07a0c65c43_52740710', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3068058da07a0c75822_30069200', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base_temp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1401158da07a0c65c43_52740710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BagShop | Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3068058da07a0c75822_30069200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="login.php" method="POST">
						<input type="text" placeholder="Name" name="username" value="">
						<input type="password" placeholder="Password" name="passwd" value="">
						
						<button type="submit" name="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<!--div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form>
					<h2>New User Signup!</h2>
					<form action="#">
						<input type="text" placeholder="Name"/>
						<input type="email" placeholder="Email Address"/>
						<input type="password" placeholder="Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form>
			</div-->
		</div>
	</div>
</section><!--/form-->

<?php
}
}
/* {/block 'body'} */
}
