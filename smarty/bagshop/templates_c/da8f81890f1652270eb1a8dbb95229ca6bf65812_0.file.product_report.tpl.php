<?php
/* Smarty version 3.1.30, created on 2017-03-28 05:57:36
  from "C:\Web_Apps\e-com\smarty\bagshop\templates\product_report.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d9fb50c054e4_61722312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8f81890f1652270eb1a8dbb95229ca6bf65812' => 
    array (
      0 => 'C:\\Web_Apps\\e-com\\smarty\\bagshop\\templates\\product_report.tpl',
      1 => 1490680212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_temp.tpl' => 1,
  ),
),false)) {
function content_58d9fb50c054e4_61722312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45758d9fb50c025c9_12809019', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1249458d9fb50c04a96_76453727', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base_temp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_45758d9fb50c025c9_12809019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BagShop | Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1249458d9fb50c04a96_76453727 extends Smarty_Internal_Block
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
