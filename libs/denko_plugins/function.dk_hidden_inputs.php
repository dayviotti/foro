<?php

/**
 *
 */
require_once '../denko/dk.html.element.php';
function smarty_function_dk_hidden_inputs($params, &$smarty){

    /**
     * Si el GET est� vac�o ni me preocupo
     */
    if(empty($_SERVER['QUERY_STRING'])){
        return '';
    }

    /**
     * Preparo el arreglo con los par�metros GET que se ignorar�n
     */
    $ignoreInputs = array();
    if(!empty($params['ignore'])){
        $ignoreInputs = explode(',',$params['ignore']);
    }

    /**
     * Separo el Query String en par�metros
     */
    $html = '';
    $getparams = explode('&',$_SERVER['QUERY_STRING']);
    foreach($getparams as $getparam){
        $param = explode('=',$getparam);
        if(in_array($param[0],$ignoreInputs)){
            continue;
        }
        $html.= '
<input type="hidden" name="'.$param[0].'" value="'.(!empty($param[1]) ? $param[1] : '').'" />';
    }

    /**
     * Retorno el HTML de los hiddens
     */
    return $html;
}
