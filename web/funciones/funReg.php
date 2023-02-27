<?php
function registro(){
    if (isset($_POST['registrarse']) && $_POST['usuarionuevo']!="" && $_POST['clavenueva']!="") {
        $daoUsuario = DB_DataObject::factory('usuarios');
        $usuario = $_POST['usuarionuevo'];
        $daoUsuario->usuario = $usuario;
        if ($daoUsuario->find()){
            return false;
        }
        else {
            $daoUsuario->clave=$_POST['clavenueva'];
            $daoUsuario->insert();
            header("Location: login.php");
            return true;
        }
    }
}
