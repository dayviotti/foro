<?php
/* Smarty version 3.1.30, created on 2023-03-09 19:44:11
  from "C:\wamp64\www\demo\web\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640a613bad1df2_01517900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4dc12d94598b07d9e5426513388f43f7f8c669' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\error.tpl',
      1 => 1678069141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_640a613bad1df2_01517900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body id="fondo">
<div class="container text-center" id="containererror">
    <?php if ($_GET['code'] == '500') {?>
        <p class="error2">500 Internal Server Error <br>
            Inténtelo más tarde.
        </p>
    <?php }?>
    <?php if ($_GET['code'] == 'index') {?>
        <p class="error2">No se pudo subir el post <br>
            Inténtelo más tarde
        </p>
        <?php }?>
    <?php if ($_GET['code'] == 'cat') {?>
        <p class="error2">No se pudo subir la categoría <br>
            Inténtelo más tarde
        </p>
    <?php }
if ($_GET['code'] == 'catElim') {?>
        <p class="error2">No se pudo eliminar la categoría <br>
            Inténtelo más tarde
        </p>
    <?php }?>
</div>
</body><?php }
}
