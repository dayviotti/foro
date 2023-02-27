<?php

require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funReg.php';

$smarty = new Smarty;

$smarty->assign('registro',registro());
$smarty->display('register.tpl');
