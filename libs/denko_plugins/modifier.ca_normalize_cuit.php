<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */

################################################################################
function smarty_modifier_ca_normalize_cuit($cuit){
    return str_replace("-", "", $cuit);
}
################################################################################
?>
