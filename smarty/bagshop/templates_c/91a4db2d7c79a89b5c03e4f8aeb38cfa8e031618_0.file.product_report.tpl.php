<?php
/* Smarty version 3.1.30, created on 2017-03-28 08:52:31
  from "C:\xampp\htdocs\smarty\bagshop\templates\product_report.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da082f1f0145_97188789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a4db2d7c79a89b5c03e4f8aeb38cfa8e031618' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\bagshop\\templates\\product_report.tpl',
      1 => 1490680214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_temp.tpl' => 1,
  ),
),false)) {
function content_58da082f1f0145_97188789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2596558da082f1da4b0_95082265', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_553858da082f1eb032_70836650', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base_temp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2596558da082f1da4b0_95082265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BagShop | Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_553858da082f1eb032_70836650 extends Smarty_Internal_Block
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
