<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funCat.php';

$smarty = new Smarty;
$smarty->addPluginsDir(array("../libs/denko_plugins"));
$smarty->loadFilter('output','dk_include');
$daoUsuario = DB_DataObject::factory('usuarios');
$daoCategoria = DB_DataObject::factory('categorias');

$daoCategoria->whereAdd('idpadre IS NULL');
$daoCategoria->find();

if (isset($_POST['action']) && isset($_POST['agregar'])) {
    switch ($_POST['action']) {
        case 'add':
            if (categoria_add()) {
                Denko:: redirect('http://localhost/demo/web/categorias.php');
            }
            break;
    }
}

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'eliminar':
            if (eliminar()) {
                Denko:: redirect('categorias.php');
            }
            else{
                Denko:: redirect('error.php?code=catElim');
            }
            break;
    }
}


$smarty->assign('daoCategoria',$daoCategoria);
$smarty->assign('admin',$daoUsuario->esAdmin());
$smarty->display('categorias.tpl');