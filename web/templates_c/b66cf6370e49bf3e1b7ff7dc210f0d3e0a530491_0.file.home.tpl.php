<?php
/* Smarty version 3.1.30, created on 2023-02-17 16:35:15
  from "C:\xampp\htdocs\skeleton\web\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63efd6f3e5d0a4_17125072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b66cf6370e49bf3e1b7ff7dc210f0d3e0a530491' => 
    array (
      0 => 'C:\\xampp\\htdocs\\skeleton\\web\\templates\\home.tpl',
      1 => 1676659976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63efd6f3e5d0a4_17125072 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_dk_include')) require_once 'C:\\xampp\\htdocs\\skeleton\\libs\\denko_plugins\\function.dk_include.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo smarty_function_dk_include(array('file'=>"styles/dashboard.css"),$_smarty_tpl);?>


<div class="wrapper">
    <main class="pt-3 main-section" style="width: 100%; margin-left: 0;">
        <div class="container-fluid">

            <h3 style="color:#555;">
                <strong>HOME</strong>
            </h3>
        </div>
    </main>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
