<?php
/**
 * Table Definition for mensajes
 */
require_once 'DB/DataObject.php';

class Mensajes extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'mensajes';            // table name
    public $idmsje;                          // int(11)  not_null primary_key auto_increment group_by
    public $titulo;                          // varchar(100)  not_null
    public $post;                            // varchar(400)  not_null
    public $fecha;                           // varchar(10)  not_null
    public $usuario;                         // varchar(40)  not_null
    public $categoria;                       // varchar(100)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Mensajes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function getComentarios(){
        $daoComentarios= DB_DataObject::factory('comentarios');
        $daoComentarios->whereAdd('idmsje='.$this->idmsje);
        $daoComentarios->find();
        return $daoComentarios;
    }
}
