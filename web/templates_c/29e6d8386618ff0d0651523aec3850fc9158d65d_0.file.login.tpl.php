<?php
/* Smarty version 3.1.30, created on 2023-02-27 07:53:15
  from "C:\wamp64\www\demo\web\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63fc8b9b018231_33179321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e6d8386618ff0d0651523aec3850fc9158d65d' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\login.tpl',
      1 => 1677363826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63fc8b9b018231_33179321 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="contlgn">
<div class="container-fluid text-center contlgn" >
    <div id="containerlgn" class="container" >
        <h1 class="h1lgn">LOGIN</h1>
        <?php if ($_POST['usuario']) {?>
            <?php $_smarty_tpl->_assignInScope('valor', $_POST['usuario']);
?>
        <?php }?>

        <form action="http://localhost/demo/web/login.php" method="post" class="formlgn" id="formlogin" onsubmit="return validacionlogin();">
            <input type="text" placeholder="Usuario" name="usuario" id="usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
"> <br>
            <input class="form-control" type="password" id="clave" placeholder="Contraseña" name="password"> <br> <br>
            <button type="submit" id="btnlgn" class="btn btn-lg btn-info" name="ingresar">Ingresar</button>
        </form>

        <?php if ($_POST['usuario'] && $_POST['password']) {?>
            <?php if (!$_SESSION['usuario']) {?>
                    <p id="incorrecto">Usuario y/o contraseña incorrectos. <br> Reinténtelo.</p>
            <?php }?>
        <?php }?>
        <div class="divregistrarse">
            <a class="registrarse"  href="http://localhost/demo/web/register.php">¿No tienes una cuenta? Regístrate</a>
        </div>
    </div>

</div>
</body>

<?php echo '<script'; ?>
 type="text/javascript" src="../js/validaciones.js"><?php echo '</script'; ?>
>
</html><?php }
}
