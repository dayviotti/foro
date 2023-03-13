<?php
/* Smarty version 3.1.30, created on 2023-03-09 20:09:29
  from "C:\wamp64\www\demo\web\templates\categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640a672946b6a3_98348358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada085c12c25073a70ef455ded91fc1b0fccf367' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\categorias.tpl',
      1 => 1678402220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_640a672946b6a3_98348358 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dk_daolister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_daolister.php';
if (!is_callable('smarty_block_dk_has_errors')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_has_errors.php';
if (!is_callable('smarty_block_dk_showmessages')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_showmessages.php';
if (!is_callable('smarty_block_dk_lister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_lister.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body class="contlgn">
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

        <h1>SKILL</h1>
    <table class="table text-center">
        <thead >
        <tr >
            <th scope="col" class="text-center">CATEGORIAS</th>
            <th scope="col" class="text-center">
                <div class="btn-group dropdown">
                    <a class="dropdown-toggle btna" data-toggle="dropdown" >
                        <img class="anadir" title="Añadir"  src="http://localhost/demo/web/images/anadir.png">
                    </a>
                    <ul class="dropdown-menu" id="menu" role="menu">
                        <li ><form class="form" method="post" action="../categorias.php">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text">Nueva categoría</label>
                                    <input type="hidden" name="action" value="add">
                                    <input class="form-control" name="nombre" placeholder="Nombre">
                                </div>
                        <li><button id="agregar" type="submit" name="agregar" class="btn btn-primary">AGREGAR</button></li>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_has_errors', array());
$_block_repeat2=true;
echo smarty_block_dk_has_errors(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>
<div class="alert alert-danger" role="alert" style="margin-bottom: 10px;"><div>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_showmessages', array());
$_block_repeat3=true;
echo smarty_block_dk_showmessages(array(), null, $_smarty_tpl, $_block_repeat3);
while ($_block_repeat3) {
ob_start();
?>
<span class="fa fa-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>
                                <?php echo $_smarty_tpl->tpl_vars['dkm_message']->value;?>
<br/>
                                <?php $_block_repeat3=false;
echo smarty_block_dk_showmessages(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat3);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div></div>
                        <?php $_block_repeat2=false;
echo smarty_block_dk_has_errors(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </form>
                        </li>
                    </ul>
                </div>



                </th>
        </tr>
        </thead>
        <tbody>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->nombre;?>
</td>
            <td>
                <a href="http://localhost/demo/web/categorias.php?action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
"><img class="eliminar" title="Eliminar" src="http://localhost/demo/web/images/eliminar.png"></a>
                <a href="http://localhost/demo/web/editarcat.php?cat=<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
"><img class="editar" title="Editar"  src="http://localhost/demo/web/images/lapiz.png"></a>
            </td>
        </tr>
        <?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </tbody>
    </table>
<?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>
</body>

<?php }
}
