<?php
require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funMensaje.php';

$smarty = new Smarty;

$smarty->addPluginsDir(array("../libs/denko_plugins"));
$daoMensaje = DB_DataObject::factory('mensajes');

if(isset($_GET['id'])){
    $idm = $_GET['id'];
}
else {
    $idm = $_POST['id'];
}

$daoMensaje->get($idm);

$daoComentario = DB_DataObject::factory('comentarios');
$daoComentario->idmsje=$idm;
$daoComentario->find();

comentar();
votar();

$smarty->assign('idm',$idm);
$smarty->assign('daoMensaje',$daoMensaje);
$smarty->assign('daoComentario',$daoComentario);
$smarty->display('mensaje.tpl');