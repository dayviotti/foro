<?php
/* Smarty version 3.1.30, created on 2023-02-17 16:36:01
  from "C:\xampp\htdocs\skeleton\web\templates\includes\print_count_listing.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63efd721863ca9_29648271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2cfefbc8f121b4ad6d48e5569deaee3223822bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\skeleton\\web\\templates\\includes\\print_count_listing.tpl',
      1 => 1669751104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63efd721863ca9_29648271 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dkp_ini')) require_once 'C:\\xampp\\htdocs\\skeleton\\libs\\denko_plugins\\block.dkp_ini.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dkp_ini', array());
$_block_repeat1=true;
echo smarty_block_dkp_ini(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

    <div class="text-right">
        <small>Listando <b><?php echo $_smarty_tpl->tpl_vars['dkp_begin']->value;?>
</b> - <b><?php echo $_smarty_tpl->tpl_vars['dkp_end']->value;?>
</b> de <b><?php echo $_smarty_tpl->tpl_vars['dkp_results']->value;?>
</b> Registros&nbsp;</small>
    </div>
<?php $_block_repeat1=false;
echo smarty_block_dkp_ini(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
