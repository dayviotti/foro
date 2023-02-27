<?php

/**
 * Funcion dkl_getdao - Asigna el objeto dao sobre el cual se esta Iterando a la variable Assign
 * @param Array $params
 * @param Smarty $smarty
 */
function smarty_function_dkl_getdao($params,&$smarty){
    // Chequeo que est� seteado el par�metro 'nombre'
    if(empty($params['assign'])){
        Denko::plugin_fatal_error('el par�metro <b>assign</b> es requerido','dkl_getdao');
    }

    // Obtengo el DAOLister
    $daoLister = &DK_DAOLister::getDaoLister($smarty);
    $dao = &$daoLister->getDAO();
    $smarty->assign($params['assign'],$dao);
}
