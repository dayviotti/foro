<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */
require_once '../commons/Cuit.php';

################################################################################
function smarty_modifier_dk_format_cuit($string, $default=null){
    if ($string == null || $string == false || $string == "") return $default !== null ? $default : "";
    return Cuit :: format($string);
}
################################################################################
?>