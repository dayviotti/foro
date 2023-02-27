<?php
################################################################################
function smarty_block_dk_role_check_functions($params, $content, &$smarty, &$repeat){
    if (!isset($params['functions'])) return false;
    if (RoleControl :: requireFunction($params['functions'],true)) {
        return $content;
    } else {
        return '';
    }
}
################################################################################