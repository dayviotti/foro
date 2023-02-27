<?php
################################################################################
function smarty_block_dk_role_check_perfil($params, $content, &$smarty, &$repeat){
    if (!isset($params['perfil'])) return '';
    if (RoleControl :: requireProfile($params['perfil'],true)) {
        return $content;
    } else if (isset($params['customOutput'])){
        $repeat = false;
        return $params['customOutput'];
    } else if (isset($params['linkText'])) {
        $repeat = false;
        return '<a class="dropdown-item disabled" href="javascript:void(0);">'.$params['linkText'].'</a>';
    } else {
        return '';
    }
}
################################################################################