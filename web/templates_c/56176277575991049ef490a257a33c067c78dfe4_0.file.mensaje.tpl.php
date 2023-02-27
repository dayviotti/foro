<?php
/* Smarty version 3.1.30, created on 2023-02-27 12:20:05
  from "C:\wamp64\www\demo\web\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63fcca25ccd039_50801299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56176277575991049ef490a257a33c067c78dfe4' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\mensaje.tpl',
      1 => 1677510479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63fcca25ccd039_50801299 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dk_daolister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_daolister.php';
if (!is_callable('smarty_block_dk_lister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_lister.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="fondo">
<div class="container-fluid text-center posts">
    <h1 class="h1ind">POST</h1>

    <h1 id="titulo"><?php echo reemplazo($_smarty_tpl->tpl_vars['daoMensaje']->value->titulo);?>
</h1>
</div>
<div class="container-fluid post">
    <div class="row" id="divmens">
        <a class="mensaje" href="#" ><?php echo reemplazo($_smarty_tpl->tpl_vars['daoMensaje']->value->post);?>
</a>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <p><span class="glyphicon glyphicon-user"> <?php echo $_smarty_tpl->tpl_vars['daoMensaje']->value->usuario;?>
</span></p>
        </div>
        <div class="col-md-4">
            <p><span class="glyphicon glyphicon-calendar"> <?php echo $_smarty_tpl->tpl_vars['daoMensaje']->value->fecha;?>
</span></p>
        </div>
    </div>
</div>

<div class="posts container-fluid text-center">
    <h2 class="h2mens">COMENTARIOS</h2>
</div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('dao'=>$_smarty_tpl->tpl_vars['daoComentario']->value,'name'=>"com",'orderBy'=>"fecha DESC"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoComentario']->value,'name'=>"com",'orderBy'=>"fecha DESC"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

    <div class="container-fluid post">
        <div class="row" id="divmens">
            <a class="mensaje" href="#" ><?php echo reemplazo($_smarty_tpl->tpl_vars['daoComentario']->value->texto);?>
</a>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <p><span class="glyphicon glyphicon-user"> <?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->usuario;?>
</span></p>
            </div>
            <div class="col-md-4">
                <p><span class="glyphicon glyphicon-calendar"> <?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->fecha;?>
</span></p>
            </div>
            <div class="col-md-4">
                <form method="get" action="http://localhost/demo/web/mensaje.php">
                    <input type="hidden" name="idcom" value="<?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->id;?>
">
                    <?php if ($_SESSION['usuario']) {?>
                        <a class="votos" href="http://localhost/demo/web/mensaje.php?id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&voto=<?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->id;?>
" role="button"><span class="glyphicon glyphicon-heart"> <?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->votos;?>
</span></a>
                    <?php } else { ?>
                        <span class="glyphicon glyphicon-heart"> <?php echo $_smarty_tpl->tpl_vars['daoComentario']->value->votos;?>
</span>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
<?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoComentario']->value,'name'=>"com",'orderBy'=>"fecha DESC"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_SESSION['usuario']) {?>
    <div class="container-fluid text-center ingmsj" id="comentariodiv" ">
        <h2 class="publicar">Ingresar nuevo comentario</h2>
        <form action="mensaje.php" method="post" onsubmit="return validacioncom();">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
">
            <textarea placeholder="Comentario" name="comentario" id="comentario" class="form-control"></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-lg btnmsje" name="guardar">Guardar</button>
        </form>
    <br>
    </div>

<?php }?>

</body>


<?php echo '<script'; ?>
 type="text/javascript" src="../js/validaciones.js"><?php echo '</script'; ?>
>
<?php }
}
