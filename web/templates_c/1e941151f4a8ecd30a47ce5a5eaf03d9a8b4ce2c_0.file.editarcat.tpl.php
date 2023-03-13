<?php
/* Smarty version 3.1.30, created on 2023-03-09 19:30:40
  from "C:\wamp64\www\demo\web\templates\editarcat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640a5e10426303_60867331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e941151f4a8ecd30a47ce5a5eaf03d9a8b4ce2c' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\editarcat.tpl',
      1 => 1678283306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_640a5e10426303_60867331 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dk_daolister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_daolister.php';
if (!is_callable('smarty_block_dk_lister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_lister.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <?php if ($_SESSION['usuario']) {?>
            <li><a id="user"><span class="glyphicon glyphicon-user usernav"></span><?php echo $_SESSION['usuario'];?>
</a></li>
            <li><a id="textlogout" href="http://localhost/demo/web/login.php?logout=true">CERRAR SESIÓN</a></li>
        <?php } else { ?>
            <li><a id="textlogout" href="http://localhost/demo/web/login.php">INICIAR SESIÓN</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <li><a id="textlogout" href="http://localhost/demo/web/categorias.php">EDITAR CATEGORIAS</a></li>
        <?php }?>
    </ul>
</div>
</div><!-- /.container-fluid -->
</nav>

<body class="contlgn">
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
    <div class="btn-group dropdown divedit">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

        <b id="cat">CATEGORÍA: <?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->nombre;?>
</b>
            <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                <img class="anadir" title="Editar"  src="http://localhost/demo/web/images/lapiz.png">
            </a>
            <ul class="dropdown-menu" id="menu" role="menu">
                <li ><form class="form" method="post" action="../editarcat.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text">Nuevo nombre</label>
                            <input type="hidden" name="action" value="editar">
                            <input type="hidden" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
">
                            <input type="hidden" name="idedit" value="<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
">
                            <input class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                <li><button id="agregar" type="submit" name="editar" class="btn btn-primary">EDITAR</button></li>
                </form></li>
            </ul>

        </div>
        <table class="table text-center">
            <thead >
            <tr >
                <th scope="col" class="text-center">SUBCATEGORIAS</th>
                <th scope="col" class="text-center">
                    <div class="btn-group dropdown">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                            <img class="anadir" title="Añadir"  src="http://localhost/demo/web/images/anadir.png">
                        </a>
                        <ul class="dropdown-menu" id="menu" role="menu">
                            <li ><form class="form" method="post" action="../editarcat.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text">Nueva subcategoría</label>
                                        <input type="hidden" name="action" value="add">
                                        <input type="hidden" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
">
                                        <input type="hidden" name="idedit" value="<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
">
                                        <input class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                            <li><button id="agregar" type="submit" name="agregar" class="btn btn-primary">AGREGAR</button></li>
                            </form></li>
                        </ul>
                    </div>

                </th>
            </tr>
            </thead>
    <?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>"cat",'orderBy'=>"id"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('dao'=>$_smarty_tpl->tpl_vars['daoSubcategoria']->value,'name'=>'subcat','orderBy'=>"id"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoSubcategoria']->value,'name'=>'subcat','orderBy'=>"id"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

            <tbody>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['daoSubcategoria']->value->nombre;?>
</td>
                    <td>
                        <a href="http://localhost/demo/web/editarcat.php?action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['daoSubcategoria']->value->id;?>
&cat=<?php echo $_smarty_tpl->tpl_vars['daoSubcategoria']->value->idpadre;?>
"><img class="eliminar" title="Eliminar" src="http://localhost/demo/web/images/eliminar.png"></a>
                        <div class="btn-group dropdown">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown">
                            <img class="editar" title="Editar"  src="http://localhost/demo/web/images/lapiz.png"></a>
                        <ul class="dropdown-menu" id="menu" role="menu">
                            <li ><form class="form" method="post" action="../editarcat.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text">Nuevo nombre</label>
                                        <input type="hidden" name="action" value="editar">
                                        <input type="hidden" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['daoSubcategoria']->value->idpadre;?>
">
                                        <input type="hidden" name="idedit" value="<?php echo $_smarty_tpl->tpl_vars['daoSubcategoria']->value->id;?>
">
                                        <input class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                            <li><button id="agregar" type="submit" name="editar" class="btn btn-primary">EDITAR</button></li>
                            </form></li>
                        </ul>

                        </div>
                    </td>
                </tr>
            <?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </tbody>
        </table>
    <?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoSubcategoria']->value,'name'=>'subcat','orderBy'=>"id"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>
</body>
<?php }
}
