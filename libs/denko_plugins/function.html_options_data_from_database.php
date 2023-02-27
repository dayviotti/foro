<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty {html_options} function plugin
 *
 * Type:     function<br>
 * Name:     html_options<br>
 * Input:<br>
 *           - name       (optional) - string default "select"
 *           - values     (required if no options supplied) - array
 *           - options    (required if no values supplied) - associative array
 *           - selected   (optional) - string default not set
 *           - output     (required if not options supplied) - array
 * Purpose:  Prints the list of <option> tags generated from
 *           the passed parameters
 * @link http://smarty.php.net/manual/en/language.function.html.options.php {html_image}
 *      (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @param array
 * @param Smarty
 * @return string
 * @uses smarty_function_escape_special_chars()
 */
function smarty_function_html_options_data_from_database($params, &$smarty) {
    //require_once $smarty->_get_plugin_filepath('shared', 'escape_special_chars');
    $datos = explode('|', $params['options']);
    $_html_result ='<option value="-1">'.(isset($params['default'])?$params['default']:'Elija una opción').'</option>';
    $dato = DB_DataObject::factory($datos[0]);
    
    $dato->whereAdd($datos[3]);
    if (isset($datos[4])) {
        $dato->orderBy($datos[4]);
    }
    $dato->find();
    
    $dataParam = array();
    if (isset($params['data']) && $params['data'] != '') {
    	$dataParam = explode('||', $params['data']);
    }
    
    while ($dato->fetch()){
    	$ds_data = '';
    	foreach($dataParam as $data) {
    		$d = explode('|', $data);
    		$ds_data .= ' data-'.$d[0].'="' . $dato->{$d[1]} . '"';
    	}
        if($params['selected'] == $dato->{$datos[1]}){
            $_html_result .= '<option selected="selected" value="' . $dato->{$datos[1]} . '"'.$ds_data.'>' . $dato->{$datos[2]} . '</option>';
        }else{
            $_html_result .= '<option value="' . $dato->{$datos[1]} . '"'.$ds_data.'>' . $dato->{$datos[2]} . '</option>';
        }
    }
    return $_html_result;
}
?>
