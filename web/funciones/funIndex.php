<?php

function subirPost()
{
    $daoMensajes = DB_DataObject::factory('mensajes');
    $usuario = $_SESSION['usuario'];
    $fecha = date("Y-m-d");
    if (isset($_POST['guardar']) && $_POST['mensaje'] != "" && $_POST['titulo'] != "") {
        $mensaje = htmlentities($_POST['mensaje']);
        $titulo = htmlentities($_POST['titulo']);
        $daoMensajes->titulo = $titulo;
        $daoMensajes->post = $mensaje;
        $daoMensajes->usuario = $usuario;
        $daoMensajes->fecha = $fecha;
        $daoMensajes->insert();
        header('Location: index.php');
    }
}
