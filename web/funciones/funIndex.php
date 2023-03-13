<?php

function mensaje_validate_post() {
    if (!isset($_POST['titulo']) ||  $_POST['titulo'] == '') {
    Denko :: addErrorMessage("El Titulo es requerido.");
}     if (!isset($_POST['mensaje']) || $_POST['mensaje'] == '') {
    Denko :: addErrorMessage("El Mensaje es requerido.");
}
    if (!isset($_POST['subcategorias']) || $_POST['subcategorias'] == '0') {
        Denko :: addErrorMessage("Debe elegir una subcategoría.");
    }
    return !Denko :: hasErrorMessages();
}

function mensaje_add()
{
    if (!mensaje_validate_post()) {
        return false;
    }
    else{
        return subirPost();
    }
}
function subirPost()
{
    $daoMensajes = DB_DataObject::factory('mensajes');
    $usuario = $_SESSION['usuario'];
    $fecha = date("Y-m-d");
        $mensaje = htmlentities($_POST['mensaje']);
        $titulo = htmlentities($_POST['titulo']);
        $daoMensajes->titulo = $titulo;
        $daoMensajes->post = $mensaje;
        $daoMensajes->usuario = $usuario;
        $daoMensajes->fecha = $fecha;
        $daoMensajes->categoria = $_POST['subcategorias'];
        return $daoMensajes->insert();

}

