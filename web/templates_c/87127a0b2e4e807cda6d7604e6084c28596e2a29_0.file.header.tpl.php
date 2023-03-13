<?php
/* Smarty version 3.1.30, created on 2023-03-10 08:32:11
  from "C:\wamp64\www\demo\web\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b153bd6ec47_25614666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87127a0b2e4e807cda6d7604e6084c28596e2a29' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\header.tpl',
      1 => 1678255569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b153bd6ec47_25614666 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/demo/web/styles/estilos.css">
    <?php echo '<script'; ?>
 src="../js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid navhead">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand linknav" href="#">FORO</a>
        </div>
        <?php if ($_SERVER['SCRIPT_NAME'] == '/demo/web/register.php' || $_SERVER['SCRIPT_NAME'] == '/demo/web/login.php' || $_SERVER['SCRIPT_NAME'] == '/demo/web/error.php' || $_SERVER['SCRIPT_NAME'] == '/demo/web/categorias.php') {?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="linklgn" href="http://localhost/demo/web/index.php"><button class="btn btniniciolgn">Inicio</button></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

        <?php } elseif ($_SERVER['SCRIPT_NAME'] == '/demo/web/mensaje.php') {?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_SESSION['usuario']) {?>
                        <li><a id="user"><span class="glyphicon glyphicon-user usernav"><?php echo $_SESSION['usuario'];?>
</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/index.php?pagina=1">INICIO</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/login.php?logout=true">CERRAR SESIÓN</a></li>
                    <?php } else { ?>
                        <li><a id="textlogout" href="http://localhost/demo/web/index.php?pagina=1">INICIO</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/login.php">INICIAR SESIÓN</a></li>
                    <?php }?>
                </ul>
            </div>
    </div><!-- /.container-fluid -->
</nav>
        <?php }?>

<?php echo '<script'; ?>
 src="../js/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>





<?php }
}
