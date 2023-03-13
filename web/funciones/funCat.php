<?php

function validarCat(){

        if (!isset($_POST['nombre']) || $_POST['nombre'] == '') {
            Denko :: addErrorMessage("El Nombre de la categoría es requerido.");
        }
        return !Denko :: hasErrorMessages();
}

function categoria_add($idpadre=0)
{
    if (!validarCat()) {
        return false;
    }
    else{
        return subirCat($idpadre);
    }
}

function subirCat($idpadre){
        $daoCategoria = DB_DataObject::factory('categorias');
        $daoCategoria->nombre = $_POST['nombre'];
        if($idpadre != 0){
            $daoCategoria->idpadre = $idpadre;
        }
        return $daoCategoria->insert();
}

function eliminar(){
    $daoCategoria = DB_DataObject::factory('categorias');
    $id= $_GET['id'];
    $daoCategoria->get($id);
    $daoSubcategoria = $daoCategoria->getSubcategorias();
    while ($daoSubcategoria->fetch()){
        $daoSubcategoria->delete();
    }
    return $daoCategoria->delete();
}

function editar(){
    if (validarCat()) {
        $daoCategoria = DB_DataObject::factory('categorias');
        $id = $_POST['idedit'];
        $daoCategoria->get($id);
        $daoCategoria->nombre = $_POST['nombre'];
        return $daoCategoria->update();
    }
    else{
        return false;
    }

}

