<?php
/**
 * Denko Smarty plugin
 * @package Denko
 * @subpackage plugins
 */

/**
 * Inny Smarty {dk_get_config_vars} function plugin
 *
 * Type: function
 * <br>
 * Name: dk_get_config_vars
 * <br>
 * Purpose: Obtiene una configuraci�n del archivo de texto .conf
 * <br>
 * Input:
 * <br>
 * - Requeridos
 *    - name = nombre de la configuraci�n.
 *
 * - Opcionales:
 *   - assign = nombre de variable de template donde asignar el valor de la configuraci�n.
 *
 * Example:
 * <pre>
 *     <h1>{dk_get_config_vars name="tipo_"|cat:$nombre_tipo}</h1>
 * </pre>
 *
 * @author Dokko Group Developers Team <info at dokkogroup dot com>
 * @link http://wiki.dokkogroup.com.ar/index.php/http://wiki.dojo/index.php/Denko%20Plugin%3A%20funci%F3n%20dk_get_config_vars {dk_get_config_vars} (Denko wiki)
 * @param array $params par�metros
 * @param Smarty &$smarty instancia de Smarty
 * @return string
 */
################################################################################
/**
 * Funcion dk_get_config_vars
 * @param Array $params
 * @param Smarty $smarty
 */
function smarty_function_dk_get_config_vars($params, &$smarty){

    # Verifico que exista el par�metro "name"
    if(empty($params['name'])){
        Denko::plugin_fatal_error('el par�metro <b>name</b> es requerido','dk_get_config_vars');
    }

    # Obtengo el valor de la configuraci�n
    $value = $smarty->get_config_vars($params['name']);

    # En caso que la configuraci�n est� vac�a, no retorno nada
    if(!isset($value)){
        return '';
    }

    # En caso que tenga que asignarla a alguna variable de template
    if(!empty($params['assign'])){
        $smarty->assign($params['assign'],$value);
        return '';
    }

    # Retorno el valor de la configuraci�n
    return $value;
}
################################################################################
?>