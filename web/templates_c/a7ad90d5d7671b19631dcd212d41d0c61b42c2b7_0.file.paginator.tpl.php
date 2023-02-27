<?php
/* Smarty version 3.1.30, created on 2023-02-27 12:20:09
  from "C:\wamp64\www\demo\web\templates\includes\paginator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63fcca29729b28_80042756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ad90d5d7671b19631dcd212d41d0c61b42c2b7' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\includes\\paginator.tpl',
      1 => 1677511081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fcca29729b28_80042756 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dkp_ini')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dkp_ini.php';
if (!is_callable('smarty_function_dkp_hrefpage')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkp_hrefpage.php';
?>
<head>
    <link rel="stylesheet" href="http://localhost/demo/web/styles/estilos.css">
</head>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dkp_ini', array());
$_block_repeat1=true;
echo smarty_block_dkp_ini(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

    <nav>
        <?php $_smarty_tpl->_assignInScope('buttonsTolerance', 5);
?>
        <?php $_smarty_tpl->_assignInScope('start', $_smarty_tpl->tpl_vars['dkp_actual']->value-$_smarty_tpl->tpl_vars['buttonsTolerance']->value);
?>
        <?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['dkp_actual']->value+$_smarty_tpl->tpl_vars['buttonsTolerance']->value);
?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value < 1) {?>
            <?php $_smarty_tpl->_assignInScope('start', 1);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['end']->value > $_smarty_tpl->tpl_vars['dkp_last']->value) {?>
            <?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['dkp_last']->value);
?>
        <?php }?>
        <ul class="pagination pagination-sm">
            <?php if ($_smarty_tpl->tpl_vars['dkp_last']->value > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value > 1) {?>
                    <li class="page-item page-ant"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>$_smarty_tpl->tpl_vars['dkp_actual']->value-1),$_smarty_tpl);?>
">&laquo;</a></li>
                <?php } else { ?>
                    <li class="page-item page-ant disabled"><a class="page-link pag" href="javascript:void(0);">&laquo;</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value > $_smarty_tpl->tpl_vars['buttonsTolerance']->value+1) {?>
                    <li class="page-item page-number"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>1),$_smarty_tpl);?>
">1</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value > $_smarty_tpl->tpl_vars['buttonsTolerance']->value+2) {?>
                    <li class="page-item page-number"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>$_smarty_tpl->tpl_vars['dkp_actual']->value-$_smarty_tpl->tpl_vars['buttonsTolerance']->value-1),$_smarty_tpl);?>
">[...]</a></li>
                <?php }?>
                <?php
$__section_pagbutts_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_pagbutts']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagbutts'] : false;
$__section_pagbutts_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['end']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pagbutts_0_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_pagbutts_0_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_pagbutts_0_loop);
$__section_pagbutts_0_total = min(($__section_pagbutts_0_loop - $__section_pagbutts_0_start), $__section_pagbutts_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pagbutts'] = new Smarty_Variable(array());
if ($__section_pagbutts_0_total != 0) {
for ($__section_pagbutts_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index'] = $__section_pagbutts_0_start; $__section_pagbutts_0_iteration <= $__section_pagbutts_0_total; $__section_pagbutts_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index'] : null)) {?>
                        <li class="page-item active page-number"><a class="page-link pag" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['dkp_actual']->value;?>
</a></li>
                    <?php } else { ?>
                        <li class="page-item page-number"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>(isset($_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index'] : null)),$_smarty_tpl);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagbutts']->value['index'] : null);?>
</a>
                    <?php }?>
                <?php
}
}
if ($__section_pagbutts_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_pagbutts'] = $__section_pagbutts_0_saved;
}
?>
                <?php if ($_smarty_tpl->tpl_vars['dkp_last']->value != 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value != $_smarty_tpl->tpl_vars['dkp_last']->value) {?>
	                    <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value+$_smarty_tpl->tpl_vars['buttonsTolerance']->value+1 < $_smarty_tpl->tpl_vars['dkp_last']->value) {?>
	                    	<li class="page-item page-number"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>$_smarty_tpl->tpl_vars['dkp_actual']->value+$_smarty_tpl->tpl_vars['buttonsTolerance']->value+1),$_smarty_tpl);?>
">[...]</a></li>
		                <?php }?>
		                <?php if ($_smarty_tpl->tpl_vars['dkp_actual']->value+$_smarty_tpl->tpl_vars['buttonsTolerance']->value < $_smarty_tpl->tpl_vars['dkp_last']->value) {?>
                    		<li class="page-item page-number"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>$_smarty_tpl->tpl_vars['dkp_last']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['dkp_last']->value;?>
</a></li>
                    	<?php }?>
                        <li class="page-item page-next"><a class="page-link pag" href="<?php echo smarty_function_dkp_hrefpage(array('number'=>$_smarty_tpl->tpl_vars['dkp_actual']->value+1),$_smarty_tpl);?>
">&raquo;</a></li>
                    <?php } else { ?>
                        <li class="page-item page-next disabled"><a class="page-link pag" href="javascript:void(0);">&raquo;</a></li>
                    <?php }?>
                <?php } else { ?>
                    <li class="page-item disabled"><a class="page-link pag" href="javascript:void(0);">&raquo;</a></li>
                <?php }?>
            <?php }?>
        </ul>
    </nav>
<?php $_block_repeat1=false;
echo smarty_block_dkp_ini(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
