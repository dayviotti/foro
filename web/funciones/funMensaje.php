<?php

function mensaje_validate_comentario() {
    if (!isset($_POST['comentario']) ||  $_POST['comentario'] == '') {
        Denko :: addErrorMessage("El contenido del Comentario es requerido.");
    }
    return !Denko :: hasErrorMessages();
}

function comentario_add($idm)
{
    if (!mensaje_validate_comentario()) {
        return false;
    }
    else{
        return comentar($idm);
    }
}
function comentar($idm){

        $daoComentario = DB_DataObject::factory('comentarios');
        $daoComentario->idmsje = $idm;
        $daoComentario->texto = $_POST['comentario'];
        $usuario = $_SESSION['usuario'];
        $fecha = date("Y-m-d");
        $daoComentario->fecha = $fecha;
        $daoComentario->usuario = $usuario;
        $daoComentario->votos = 0;
        return $daoComentario->insert();
}

function votar(){
    $daoComentario = DB_DataObject::factory('comentarios');
    if(isset($_SESSION['usuario'])) {
        if (isset($_GET['voto'])) {
            $daoComentario->whereAdd('id='.$_GET['voto']);
            $daoComentario->find();
            $daoComentario->fetch();
            $votos = intval($daoComentario->votos);
            $nuevos = $votos+1;
            $daoComentario->votos = $nuevos;
            return $daoComentario->update();
        }
    }
}