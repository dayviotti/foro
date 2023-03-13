<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funIndex.php';

$smarty = new Smarty;
$smarty->addPluginsDir(array("../libs/denko_plugins"));
$smarty->loadFilter('output','dk_include');

$daoCategoria = DB_DataObject::factory('categorias');

$daoCategoria->whereAdd('idpadre IS NULL');
$daoCategoria->find();

if (isset($_POST['action']) && isset($_POST['guardar'])) {
    switch ($_POST['action']) {
        case 'add':
            if (mensaje_add()) {
                Denko:: redirect('index.php');
            }
            break;
    }

}


$daoMensajes = DB_DataObject::factory('mensajes');

$daoMensajes->selectAdd();

$daoUsuario = DB_DataObject::factory('usuarios');

$smarty->assign('admin',$daoUsuario->esAdmin());

$smarty->assign('daoMensajes',$daoMensajes);
$smarty->assign('daoCategoria',$daoCategoria);

$smarty->display('home.tpl');
