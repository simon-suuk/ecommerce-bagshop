<?php
/* Smarty version 3.1.30, created on 2017-03-28 12:13:07
  from "C:\xampp\htdocs\finaltest\smarty\bagshop\templates\product_report.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da3733d1c872_62390283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5d5c3fbee8c062cce1571ae692afb7c406db8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\finaltest\\smarty\\bagshop\\templates\\product_report.tpl',
      1 => 1490680214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_temp.tpl' => 1,
  ),
),false)) {
function content_58da3733d1c872_62390283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198558da3733cedbf3_91833858', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1976658da3733d17805_57239173', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base_temp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1198558da3733cedbf3_91833858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BagShop | Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1976658da3733d17805_57239173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--List of links on the page-->
    <div id="main">
        <ul>
          <li><a href="groupBar.php">PHP Bar Chart</a></li>
          <li><a href="groupWork.php">PHP Pie Chart</a></li>
          <!--li><a href="#">JavaScript Pie Chart</a></li>
          <li><a href="#">JavaScript Bar Chart</a></li-->
        </ul>
    <div>
<?php
}
}
/* {/block 'body'} */
}
