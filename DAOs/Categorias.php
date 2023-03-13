<?php
/**
 * Table Definition for categorias
 */
require_once 'DB/DataObject.php';

class Categorias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'categorias';          // table name
    public $id;                              // int(11)  not_null primary_key auto_increment group_by
    public $idpadre;                         // int(11)  group_by
    public $nombre;                          // varchar(40)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Categorias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function getSubcategorias(){
        $daoSubcategorias = DB_DataObject::factory('categorias');
        $daoSubcategorias->whereAdd('idpadre='.$this->id);
        $daoSubcategorias->find();
        return $daoSubcategorias;
    }

}
