<?php

################################################################################
function smarty_function_dk_role_has_perfil($params, &$smarty){
    if (!isset($params['perfil'])) return true;
    $res = RoleControl :: requireProfile($params['perfil'],true);
    if (isset($params['assign'])) $smarty->assign($params['assign'],$res);
    if ($res) {
        return true;
    } else {
        return false;
    }
}
################################################################################
?>
