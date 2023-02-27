<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funLogin.php';

$smarty = new Smarty;


login();
logout();

$smarty->display('login.tpl');
