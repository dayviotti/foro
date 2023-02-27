<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */


################################################################################
function smarty_modifier_ca_format_cuit($cuit){
    if (strrpos($cuit,"-") > 0) return $cuit;
        return substr($cuit,0,2) . "-" . substr($cuit,2,8) . "-" . substr($cuit,10,1);
}
################################################################################
?>
