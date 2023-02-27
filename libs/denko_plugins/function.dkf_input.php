<?php

/**
 *
 */
function smarty_function_dkf_input($params,&$smarty){
    // Chequeo que est� seteado el par�metro 'nombre'
    if(empty($params['name'])){
        Denko::plugin_fatal_error('el par�metro <b>name</b> es requerido','dkf_input');
    }

    // Obtengo el DAOLister
    $daoLister = &DK_DAOLister::getDaoLister($smarty);

    // Asigno el input a su form local
    $formName = Denko::getSmartyParentTag($smarty,'dk_filters');
    if($formName != null){
        $daoLister->assignInputToForm($formName,$params['name']);
    }

    // Obtengo el HTML del input
    return $daoLister->getFilterInput($params);
}
