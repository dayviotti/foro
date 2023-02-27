<?php
function comentar(){
    if(isset($_GET['id'])){
        $idm = $_GET['id'];
    }
    else {
        $idm = $_POST['id'];
    }
    if($_POST['comentario']!="") {
        $daoComentario = DB_DataObject::factory('comentarios');
        $daoComentario->idmsje = $idm;
        $daoComentario->texto = $_POST['comentario'];
        $usuario = $_SESSION['usuario'];
        $fecha = date("Y-m-d");
        $daoComentario->fecha = $fecha;
        $daoComentario->usuario = $usuario;
        $daoComentario->votos = 0;
        $daoComentario->insert();
    }
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
            $daoComentario->update();
        }
    }
}