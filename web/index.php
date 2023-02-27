<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funIndex.php';

$smarty = new Smarty;
$smarty->addPluginsDir(array("../libs/denko_plugins"));
$smarty->loadFilter('output','dk_include');

subirPost();

$daoMensajes = DB_DataObject::factory('mensajes');

$daoMensajes->selectAdd();


$smarty->assign('daoMensajes',$daoMensajes);

$smarty->display('home.tpl');
