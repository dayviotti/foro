<?php

function smarty_function_dko_url($params,&$smarty){
    // Compruebo que est� seteado el par�metro 'nombre'
    if(empty($params['name'])){
        Denko::plugin_fatal_error('el par�metro <b>name</b> es requerido','dko_url');
    }

    // Compruebo que est� seteado el par�metro 'order'
    if(empty($params['order'])){
        Denko::plugin_fatal_error('el par�metro <b>order</b> es requerido','dko_url');
    }

    // Compruebo que el par�metro 'order' sea 'asc' o 'desc'
    if($params['order'] != 'asc' && $params['order'] != 'desc'){
        Denko::plugin_fatal_error('el par�metro <b>order</b> debe ser <b>asc</b> o <b>desc</b>','dko_url');
    }

    $params['name'] = strtolower($params['name']);
    $daoLister = &DK_DAOLister::getDaoLister($smarty);
    return $daoLister->getOrderUrl($params);
}
