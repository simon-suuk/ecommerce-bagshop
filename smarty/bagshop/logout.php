<?php
session_start();
session_destroy();

require '../libs/Smarty.class.php';

// create object
$smarty = new Smarty;

// display it
$smarty->display('index.tpl');

?>