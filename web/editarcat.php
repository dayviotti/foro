<?php

require_once 'common.php';
require_once 'funciones/funciones.php';
require_once 'funciones/funCat.php';

$smarty = new Smarty;
$smarty->addPluginsDir(array("../libs/denko_plugins"));
$smarty->loadFilter('output', 'dk_include');

$daoUsuario = DB_DataObject::factory('usuarios');
$smarty->assign('admin',$daoUsuario->esAdmin());

$daoCategoria = DB_DataObject::factory('categorias');

if(isset($_GET['cat'])){
    $idc = $_GET['cat'];
}
else {
    $idc = $_POST['cat'];
}

if (!$daoCategoria->get($idc)){
    Denko :: redirect('error.php?code=500');
}
else {
    $daoSubcategoria = $daoCategoria->getSubcategorias();
}

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'eliminar':
            if (eliminar()) {
                Denko:: redirect('http://localhost/demo/web/editarcat.php?cat='.$idc );
            }
            else{
                Denko:: redirect('error.php?code=catElim');
            }
            break;
    }
}

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            if (categoria_add($idc)) {
                Denko:: redirect('http://localhost/demo/web/editarcat.php?cat='.$idc);
            }
            else{
                Denko:: redirect('error.php?code=cat');
            }
            break;
        case 'editar':
            if (editar()) {
                Denko:: redirect('http://localhost/demo/web/editarcat.php?cat='.$idc );
            }
            else{
                Denko:: redirect('error.php?code=catElim');
            }
            break;
    }
}





$smarty->assign('daoCategoria',$daoCategoria);
$smarty->assign('daoSubcategoria',$daoSubcategoria);
$smarty->display('editarcat.tpl');
