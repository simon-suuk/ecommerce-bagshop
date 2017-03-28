<?php
/* Smarty version 3.1.30, created on 2017-03-28 12:13:59
  from "C:\xampp\htdocs\finaltest\smarty\bagshop\templates\order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da3767f01ea3_40858621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd708e907dea57de28ceb4405459736a2a13301c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\finaltest\\smarty\\bagshop\\templates\\order.tpl',
      1 => 1490680128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_temp.tpl' => 1,
  ),
),false)) {
function content_58da3767f01ea3_40858621 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\finaltest\\smarty\\libs\\plugins\\modifier.capitalize.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414158da3767b9b768_02210826', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925058da3767ef45e1_09142620', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base_temp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1414158da3767b9b768_02210826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BagShop | Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1925058da3767ef45e1_09142620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <div class="register-req">
                <p></p>
            </div>
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="shopper-info">
                            <form action="order.php" method="POST">
								<p>Customer: <span style="color:orange"><?php echo smarty_modifier_capitalize($_SESSION['CUSTOMER']['firstname']);?>
 <?php echo smarty_modifier_capitalize($_SESSION['CUSTOMER']['lastname']);?>
</span></p>
								<input type="hidden" name="cno" value=<?php echo $_SESSION['CUSTOMER']['cno'];?>
>


								<p>Employee On Duty: <span style="color:orange"><?php echo smarty_modifier_capitalize($_SESSION['EMPLOYEE']['fname']);?>
 <?php echo smarty_modifier_capitalize($_SESSION['EMPLOYEE']['lname']);?>
</span></p>
								<input type="hidden" name="eno" value=<?php echo $_SESSION['EMPLOYEE']['eno'];?>
>
								
								<p>Order Information: <span style="color:orange"><?php echo smarty_modifier_capitalize($_SESSION['PART']['pname']);?>
</span></p>
								<input type="hidden" name="pno" value=<?php echo $_SESSION['PART']['pno'];?>
>

								<p></p>
								<input type="number" placeholder="Quantity Demanded" name="qty" value="">

								<!--a class="btn btn-primary" href="">Make Order</a-->
								<input class="btn btn-primary" type="submit" name="submit" value="Make Order" />
							</form>
                        </div>
                    </div>
                 
                    <div class="col-sm-4">
                        <div class="order-message">
                             <p>Order Notification</p>
							<textarea style="font-size:160%; color:orange;" name="message" placeholder="Notes about your order, Special Notes for Delivery" rows="1"><?php echo $_smarty_tpl->tpl_vars['order_info']->value;?>
</textarea>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
	</section>
<?php
}
}
/* {/block 'body'} */
}
