<?php
require_once 'common.php';

$smarty = new Smarty;

$smarty->addPluginsDir(array("../libs/denko_plugins"));

$smarty->display('error.tpl');