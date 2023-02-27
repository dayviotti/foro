<?php
function login(){
    if (isset($_POST['ingresar'])) {
        $daoUsuario = DB_DataObject::factory('usuarios');
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $daoUsuario->usuario = $usuario;
        $daoUsuario->clave = $clave;
        if ($daoUsuario->find()){
            $_SESSION['session'] = true;
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php");
        }
    }
}

function logout(){
    if(isset($_GET['logout'])){
        session_destroy();
        header('Location:index.php?pagina=1');
    }
}