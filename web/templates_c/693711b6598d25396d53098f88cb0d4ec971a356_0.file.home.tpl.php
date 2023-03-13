<?php
/* Smarty version 3.1.30, created on 2023-03-10 08:32:11
  from "C:\wamp64\www\demo\web\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640b153bc5f3a3_22451542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693711b6598d25396d53098f88cb0d4ec971a356' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\home.tpl',
      1 => 1678401804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:includes/paginator.tpl' => 1,
  ),
),false)) {
function content_640b153bc5f3a3_22451542 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_dk_daolister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_daolister.php';
if (!is_callable('smarty_function_dkf_declare')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkf_declare.php';
if (!is_callable('smarty_block_dk_filters')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_filters.php';
if (!is_callable('smarty_function_dkf_input')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkf_input.php';
if (!is_callable('smarty_block_dk_lister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_lister.php';
if (!is_callable('smarty_function_dkl_getdao')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkl_getdao.php';
if (!is_callable('smarty_block_dk_has_errors')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_has_errors.php';
if (!is_callable('smarty_block_dk_showmessages')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_showmessages.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('table'=>"mensajes",'name'=>"msje",'resultsPerPage'=>3,'orderBy'=>"idmsje DESC"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('table'=>"mensajes",'name'=>"msje",'resultsPerPage'=>3,'orderBy'=>"idmsje DESC"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>


        <?php echo smarty_function_dkf_declare(array('type'=>"text",'name'=>"f_t",'queryToApply'=>"titulo LIKE \"%@VALUE@%\""),$_smarty_tpl);?>


        <?php echo smarty_function_dkf_declare(array('type'=>"text",'name'=>"f_c",'queryToApply'=>"categoria LIKE \"%@VALUE@%\""),$_smarty_tpl);?>




        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><div class="btn-group dropdown buscar">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                            <p><span class="glyphicon glyphicon-search"></span></p>
                        </a>
                        <ul class="dropdown-menu " id="menu" role="menu">
                            <li ><form class="navbar-form text-center" action="http://localhost/demo/web/index.php" method="get">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_filters', array('name'=>"busqueda"));
$_block_repeat2=true;
echo smarty_block_dk_filters(array('name'=>"busqueda"), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

                                        <div class="form-group text-center">
                                            <?php if ($_GET['dkf_msje_f_t']) {?>
                                                <?php $_smarty_tpl->_assignInScope('valorb', $_GET['dkf_msje_f_t']);
?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('valorb', '');
?>
                                            <?php }?>
                                            <?php echo smarty_function_dkf_input(array('name'=>"f_t",'class'=>"form-control",'placeholder'=>"Título",'value'=>$_smarty_tpl->tpl_vars['valorb']->value),$_smarty_tpl);?>

                                            <br>
                                            <br>
                                            <?php echo smarty_function_dkf_input(array('name'=>"f_c",'class'=>"form-control",'placeholder'=>"Categoría"),$_smarty_tpl);?>

                                            <br>
                                        </div>
                                        <button type="submit" id="btnbusqueda" class="btn btn-default">Filtrar</button>
                                    <?php $_block_repeat2=false;
echo smarty_block_dk_filters(array('name'=>"busqueda"), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </form></li>
                        </ul>
                    </div>
                </li>
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

<body id="fondo">

<div class="container-fluid text-center posts">
    <h1 class="h1ind">POSTS</h1>
</div>


        <div class="container-fluid post">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

            <?php smarty_function_dkl_getdao(array('assign'=>"daoMensajes"),$_smarty_tpl);?>

                <?php $_smarty_tpl->_assignInScope('daoComentarios', $_smarty_tpl->tpl_vars['daoMensajes']->value->getComentarios());
?>
            <div class="row" id="divmens">
                <a class="mensaje" href="http://localhost/demo/web/mensaje.php?id=<?php echo $_smarty_tpl->tpl_vars['daoMensajes']->value->idmsje;?>
" ><?php echo reemplazo($_smarty_tpl->tpl_vars['daoMensajes']->value->titulo);?>
</a>
            </div>
            <div class="row text-center">
                <div class="col-md-3 text-left">
                    <p><span class="glyphicon glyphicon-user"> <?php echo reemplazo($_smarty_tpl->tpl_vars['daoMensajes']->value->usuario);?>
</span></p>
                </div>
                <div class="col-md-3 text-left">
                    <p><span class="glyphicon glyphicon-calendar"><?php echo $_smarty_tpl->tpl_vars['daoMensajes']->value->fecha;?>
 </span></p>
                </div>
                <div class="col-md-2 text-left">
                    <p><span class="glyphicon glyphicon-comment"> <?php echo $_smarty_tpl->tpl_vars['daoComentarios']->value->count();?>
</span></p>
                </div>
                <div class="col-md-4 text-left">
                    <p><span class="glyphicon glyphicon-star"> <?php echo reemplazo($_smarty_tpl->tpl_vars['daoMensajes']->value->categoria);?>
</span></p>
                </div>
            </div>
            <?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </div>

    <div class="container-fluid botones text-center">
        <?php $_smarty_tpl->_subTemplateRender("file:includes/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
<?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('table'=>"mensajes",'name'=>"msje",'resultsPerPage'=>3,'orderBy'=>"idmsje DESC"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_SESSION['usuario']) {?>

    <?php if ($_POST['titulo']) {?>
        <?php $_smarty_tpl->_assignInScope('valor', $_POST['titulo']);
?>
    <?php }?>
        <div class="container-fluid text-center ingmsj">
            <h2 class="publicar">Publique un nuevo post</h2>
            <form action="http://localhost/demo/web/index.php" method="post" id="formindex" onsubmit="return validacionindex();">
                <input type="hidden" name="action" value="add">
                <input type="text" placeholder="Título" maxlength="100" name="titulo" id="tit" class="form-control tit" value="<?php if ($_POST['titulo'] != '') {
echo $_POST['titulo'];
}?>">
                <input type="text" name="mensaje" id="post" placeholder="Contenido" class="form-control msje" value="<?php if ($_POST['mensaje'] != '') {
echo $_POST['mensaje'];
}?>">
                <br>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>'cat'));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>'cat'), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

                <select id="categorias" name="categorias" class="form-control">
                    <option value="0">Seleccione una categoría</option>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['daoCategoria']->value->nombre;?>
</option>
                    <?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </select>
                <br>
                <?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('dao'=>$_smarty_tpl->tpl_vars['daoCategoria']->value,'name'=>'cat'), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <select id="subcategorias" name="subcategorias" class="form-control">
                    <option value="0">Selecccione una subcategoría</option>
                </select>

                <button type="submit" class="btn btn-lg btnmsje" name="guardar">Subir</button>
            </form>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_has_errors', array());
$_block_repeat1=true;
echo smarty_block_dk_has_errors(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
<div class="alert alert-danger" role="alert" style="margin-bottom: 10px;"><div>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_showmessages', array());
$_block_repeat2=true;
echo smarty_block_dk_showmessages(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>
<span class="fa fa-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>
                    <?php echo $_smarty_tpl->tpl_vars['dkm_message']->value;?>
<br/>
                    <?php $_block_repeat2=false;
echo smarty_block_dk_showmessages(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div></div>
            <?php $_block_repeat1=false;
echo smarty_block_dk_has_errors(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        </div>

    <?php }?>



</body>

<?php echo '<script'; ?>
>
    $(document).ready(function (e){
        $("#categorias").change(function (){
           var parametros = "id="+$("#categorias").val();
            $.ajax({
                data: parametros,
                url:'../ajax_categorias.php',
                type: 'get',
                beforeSend: function () { },
                success: function (response) {
                    var data = JSON.parse(response);
                    var html = "<option value='0'>Selecccione una subcategoría</option>"
                    for (x of data){
                        html+= "<option value='" + x.nombre + "'>" + x.nombre + "</option>"
                    }
                    $('#subcategorias').html(html)
                },
                error:function (){
                    alert("error")
                }
            });
        })

    })
<?php echo '</script'; ?>
>




</html>

<?php }
}
