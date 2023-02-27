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
function smarty_function_html_options_from_database($params, &$smarty) {
    //require_once $smarty->_get_plugin_filepath('shared', 'escape_special_chars');
    $datos = explode('|', $params['options']);
    $_html_result ='<option value="-1">'.(isset($params['default'])?$params['default']:'Elija una opción').'</option>';
    $dato = DB_DataObject::factory($datos[0]);
    
    $dato->whereAdd($datos[3]);
    if (isset($datos[4])) {
        $dato->orderBy($datos[4]);
    }
    $dato->find();
    while ($dato->fetch()){
        if($params['selected'] == $dato->{$datos[1]}){
            $_html_result .= '<option selected="selected" value="' . $dato->{$datos[1]} . '">' . $dato->{$datos[2]} . '</option>';
        }else{
            $_html_result .= '<option value="' . $dato->{$datos[1]} . '">' . $dato->{$datos[2]} . '</option>';
        }
    }
    return $_html_result;
}

/*
  function smarty_function_html_options_optoutput($key, $value, $selected) {
  if(!is_array($value)) {
  $_html_result = '<option label="' . smarty_function_escape_special_chars($value) . '" value="' .
  smarty_function_escape_special_chars($key) . '"';
  if (in_array((string)$key, $selected))
  $_html_result .= ' selected="selected"';
  $_html_result .= '>' . smarty_function_escape_special_chars($value) . '</option>' . "\n";
  } else {
  $_html_result = smarty_function_html_options_optgroup($key, $value, $selected);
  }
  return $_html_result;
  }

  function smarty_function_html_options_optgroup($key, $values, $selected) {
  $optgroup_html = '<optgroup label="' . smarty_function_escape_special_chars($key) . '">' . "\n";
  foreach ($values as $key => $value) {
  $optgroup_html .= smarty_function_html_options_optoutput($key, $value, $selected);
  }
  $optgroup_html .= "</optgroup>\n";
  return $optgroup_html;
  }
 */
/* vim: set expandtab: */
?>
