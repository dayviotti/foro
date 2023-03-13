<?php
/* Smarty version 3.1.30, created on 2023-03-03 07:07:31
  from "C:\wamp64\www\demo\web\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6401c6e3c92ea8_88826675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbece6e0c36116ba2735f314d9708ef21f0a6dbb' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\register.tpl',
      1 => 1677425990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6401c6e3c92ea8_88826675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid text-center contlgn" >
    <div id="containerlgn" class="container" >
        <h1 class="h1reg">REGISTRO</h1>
        <?php if ($_POST['usuarionuevo']) {?>
            <?php $_smarty_tpl->_assignInScope('valor', $_POST['usuarionuevo']);
?>
        <?php }?>
        <?php if (!$_SESSION['usuario']) {?>
            <form action="http://localhost/demo/web/register.php" method="post" class="formlgn" id="formlogin" onsubmit="return validacionreg();">
                <input type="text" placeholder="Usuario" name="usuarionuevo" id="usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
"> <br>
                <input class="form-control" type="password" id="clave" placeholder="Contraseña" name="clavenueva"> <br> <br>
                <button type="submit" id="btnlgn" class="btn btn-lg btn-info" name="registrarse">Registrarse</button>
            </form>
                <?php if ($_POST['usuarionuevo'] && $_POST['clavenueva']) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['registro']->value) {?>
                        <p id="incorrecto">Nombre de usuario existente. <br> Elija otro.</p>
                    <?php }?>
                <?php }?>
            <?php }?>


            <div class="divregistrarse">
                <a class="registrarse"  href="http://localhost/demo/web/login.php">¿Ya tienes una cuenta? Inicia sesión</a>
            </div>
    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="../js/validaciones.js"><?php echo '</script'; ?>
>
</html><?php }
}
