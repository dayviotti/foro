<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */

/**
 * Denko Smarty {dk_trim} modifier plugin
 *
 * Type: modifier
 * <br>
 * Name: dk_trim
 * <br>
 * Purpose: Elimina espacios en blanco de un string
 *
 * @author Dokko Group Developers Team <info at dokkogroup dot com>
 * @param string $string cadena de texto
 * @param boolean $inside indica si debe buscar espacios dentro del string o solo en los bordes
 * @return string
 */
################################################################################
function smarty_modifier_ca_format_currency($number){
    if ($number < 0) return '<span class="text-danger">'.format_currency($number).'</span>';
    else return format_currency($number);
}
################################################################################
?>
