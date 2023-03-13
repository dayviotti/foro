<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funMensaje.php';

$smarty = new Smarty;

$smarty->addPluginsDir(array("../libs/denko_plugins"));
$smarty->loadFilter('output','dk_include');

$daoMensaje = DB_DataObject::factory('mensajes');

if(isset($_GET['id'])){
    $idm = $_GET['id'];
}
else {
    $idm = $_POST['id'];
}

if (!$daoMensaje->get($idm)){
    Denko :: redirect('error.php?code=500');
}


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            if(comentario_add($idm)){
                Denko:: redirect('mensaje.php?id=' . $idm);
            }
            break;
    }
}

if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        case 'votar':
            if(!votar()){
                Denko :: redirect('error.php?code=500');
            }
            else {
                Denko :: redirect('mensaje.php?id=' . $idm);
            }
            break;
    }
    exit;
}


$smarty->assign('idm',$idm);
$smarty->assign('daoMensaje',$daoMensaje);
$smarty->display('mensaje.tpl');