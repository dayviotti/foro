<?php
################################################################################
function smarty_function_dkp_query_hrefpage($params,&$smarty){

    # Verifico que est� seteado el par�metro 'number'
    if(empty($params['number'])){
        Denko::plugin_fatal_error('el par�metro <b>number</b> es requerido','dkp_query_hrefpage');
    }
    
    if(empty($params['name'])){
    	Denko::plugin_fatal_error('el par�metro <b>name</b> es requerido','dkp_query_hrefpage');
    }

    $paramPage = $params['name'];
    $href = basename($_SERVER['PHP_SELF']).'?'.$paramPage.'='.$params['number'];

    #Armo la querystring con el resto de los par�metros GET
    $queryString = '';
    foreach($_GET as $param => $value){
        if($param == $paramPage) continue;
        $queryString.= '&'.$param.'='.htmlspecialchars($value);
    }

    # Retorno la url
    return $href.$queryString;
}
################################################################################