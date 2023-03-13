<?php
/**
 * Table Definition for usuarios
 */
require_once 'DB/DataObject.php';

class Usuarios extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'usuarios';            // table name
    public $id;                              // int(11)  not_null primary_key auto_increment group_by
    public $usuario;                         // varchar(40)  not_null
    public $clave;                           // varchar(40)  not_null
    public $admin;                           // varchar(2)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Usuarios',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function esAdmin(){

        if(isset($_SESSION['usuario'])){
            $this->usuario = $_SESSION['usuario'];
            $this->admin = 'si';
            return $this->find();
        }
        else{
            return false;
        }
    }
}
