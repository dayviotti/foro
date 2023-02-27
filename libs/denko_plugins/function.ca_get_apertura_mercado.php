<?php
/**
 *
 */
################################################################################
function smarty_function_ca_get_apertura_mercado($params,&$smarty){

    if(!isset($params['id_cereal'])){
        return false;
    }

    if(!isset($params['id_destino_acopio'])){
        return false;
    }

    if(!isset($params['tipo'])){
        return false;
    }

    if(!isset($params['assign'])){
        return false;
    }

    $dao = DB_DataObject :: factory('apertura_mercado');

    if (!$dao) {
        return false;
    }

    $dao->whereAdd("id_cereal = " . $params['id_cereal']);
    $dao->whereAdd("id_destino = " . $params['id_destino_acopio']);
    $dao->whereAdd("tipo = '" . $params['tipo'] . "'");

    if (isset($params['fecha'])) {
        $dao->whereAdd("DATE_FORMAT(fecha,'%Y-%m') = '" . $params['fecha'] ."'");
    }

    if (!$dao->find(true)) {
        $smarty->assign($params['assign'],null);
    } else {
        $smarty->assign($params['assign'],$dao);
    }

}
################################################################################
?>