<?php
###############################################################################
function smarty_block_dk_has_errors($params,$content,$smarty,&$repeat){
    if (isset($params['assign'])) {
        $repeat = false;
        $content = null;
        $smarty->assign($params['assign'],Denko :: hasErrorMessages());
    }
    if ($repeat == true) {
        $smarty->tpl_vars['SHOWING_MSGS'] = Denko :: hasErrorMessages();
    } else {
        return $content != null &&  isset($smarty->tpl_vars['SHOWING_MSGS']) && $smarty->tpl_vars['SHOWING_MSGS'] ? $content : '';
    }
}
###############################################################################