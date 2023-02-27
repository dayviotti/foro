<?php
/**
 *
 */
################################################################################
function smarty_function_ca_getdao($params,&$smarty){
    if(!isset($params['class'])){
        return false;
    }

    if(!isset($params['id'])){
        return false;
    }

    if(!isset($params['assign'])){
        return false;
    }

    $dao = DB_DataObject :: factory($params['class']);

    if (!$dao) {
        return false;
    }

    if (!$dao->get($params['id'])) {
        $smarty->assign($params['assign'],null);
    } else {
        $smarty->assign($params['assign'],$dao);
    }

}
################################################################################
?>