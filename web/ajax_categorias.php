<?php

require_once 'common.php';
require_once 'funciones/funciones.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $array = array();
        $aux = array();
        $daoSubcategorias = DB_DataObject::factory('categorias');
        $daoSubcategorias->whereAdd('idpadre='.$id);
        $daoSubcategorias->find();
        while ($daoSubcategorias->fetch()){
            $aux['id'] = $daoSubcategorias->id;
            $aux['nombre'] = $daoSubcategorias->nombre;
            $array[] = $aux;
        }
        echo json_encode($array);
    }

