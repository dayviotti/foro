<?php
/**
 * Table Definition for comentarios
 */
require_once 'DB/DataObject.php';

class Comentarios extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'comentarios';         // table name
    public $id;                              // int(10)  not_null primary_key auto_increment group_by
    public $idmsje;                          // int(10)  not_null group_by
    public $texto;                           // varchar(400)  not_null
    public $usuario;                         // varchar(40)  not_null
    public $fecha;                           // varchar(10)  not_null
    public $votos;                           // int(10)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Comentarios',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
