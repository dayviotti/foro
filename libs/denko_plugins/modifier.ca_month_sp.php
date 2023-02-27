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
function smarty_modifier_ca_month_sp($month){
    $months = array(    'January' => 'Enero',
                        'February' => 'Febrero',
                        'March' => 'Marzo',
                        'April' => 'Abril',
                        'May' => 'Mayo',
                        'June' => 'Junio',
                        'July' => 'Julio',
                        'August' => 'Agosto',
                        'September' => 'Septiembre',
                        'October' => 'Octubre',
                        'November' => 'Noviembre',
                        'December' => 'Diciembre');
    return (isset($months[$month])) ? $months[$month] : 'DESCONOCIDO';
}
################################################################################
?>
