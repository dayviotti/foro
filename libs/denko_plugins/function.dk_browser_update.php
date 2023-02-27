<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */

/**
 * Denko Smarty {dk_browser_update} function plugin
 *
 * Type: function
 * <br>
 * Name: dk_browser_update
 * <br>
 * Purpose: Retorna el c�digo para informar a los usuarios que deben actualizar el navegador.
 * <br>
 * Input:
 * <br>
 * - Opcionales:
 *   - assign = nombre de variable a la que asignar� el valor retornado.
 * <br>
 * Examples:
 * <pre>
 * {dk_browser_update}
 * {dk_browser_update assign="browserUpdate"}
 * </pre>
 *
 * @author Denko Developers Group <info at dokkogroup dot com dot ar>
 * @link http://wiki.dojo/index.php/Denko%20Plugin%3A%20funci%F3n%20dk_browser_update {dk_browser_update}
 * @param Array $params par�metros
 * @param Smarty $smarty instancia de smarty
 * @return string
 */
################################################################################
function smarty_function_dk_browser_update($params, &$smarty) {
    $code = '<script type="text/javascript"> 
var $buoop = {} 
$buoop.ol = window.onload; 
window.onload=function(){ 
    if ($buoop.ol) $buoop.ol(); 
    var e = document.createElement("script"); 
    e.setAttribute("type", "text/javascript"); 
    e.setAttribute("src", "http://browser-update.org/update.js"); 
    document.body.appendChild(e); 
}
</script>';
    # En caso de existir el par�metro assign, asigno el c�digo al template
    if(!empty($params['assign'])){
        $smarty->assign($params['assign'],$code);
        return '';
    }
    # Retorno el c�digo
    return $code;
}
################################################################################
