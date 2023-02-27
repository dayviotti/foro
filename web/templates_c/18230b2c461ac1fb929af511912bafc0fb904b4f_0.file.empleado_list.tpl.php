<?php
/* Smarty version 3.1.30, created on 2023-02-23 13:19:14
  from "C:\wamp64\www\demo\web\templates\empleado_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63f7920272bf96_81463633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18230b2c461ac1fb929af511912bafc0fb904b4f' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\empleado_list.tpl',
      1 => 1676665461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:includes/print_count_listing.tpl' => 1,
    'file:includes/paginator.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63f7920272bf96_81463633 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_dk_include')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dk_include.php';
if (!is_callable('smarty_block_dk_daolister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_daolister.php';
if (!is_callable('smarty_function_dkf_declare')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkf_declare.php';
if (!is_callable('smarty_block_dk_filters')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_filters.php';
if (!is_callable('smarty_function_dkf_input')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkf_input.php';
if (!is_callable('smarty_block_dk_lister')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\block.dk_lister.php';
if (!is_callable('smarty_function_dkl_getdao')) require_once 'C:\\wamp64\\www\\demo\\libs\\denko_plugins\\function.dkl_getdao.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo smarty_function_dk_include(array('file'=>"styles/dashboard.css"),$_smarty_tpl);?>


<div class="wrapper">
    <main class="pt-3 main-section" style="width: 100%; margin-left: 0;">
        <div class="container-fluid">

            <h3 style="color:#555;">
                Listado de <strong>Empleados</strong>
            </h3>

            <section class="row form-group">
                <div class="col-12 text-right">
                    <div class="btn-toolbar pull-right" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a class="btn btn-primary form-control mt-4" href="empleados.php?action=add"><span class="fa fa-plus"></span> AGREGAR</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row lists">
                <div class="col-12">
                    <div class="card">

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_daolister', array('table'=>"empleado",'name'=>"emp",'resultsPerPage'=>2,'orderBy'=>"nombre"));
$_block_repeat1=true;
echo smarty_block_dk_daolister(array('table'=>"empleado",'name'=>"emp",'resultsPerPage'=>2,'orderBy'=>"nombre"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>


                            <?php echo smarty_function_dkf_declare(array('type'=>"text",'name'=>"f_n",'queryToApply'=>"nombre LIKE \"%@VALUE@%\""),$_smarty_tpl);?>

							
							<?php echo smarty_function_dkf_declare(array('type'=>"text",'name'=>"f_c",'queryToApply'=>"cuil LIKE \"%@VALUE@%\""),$_smarty_tpl);?>

							
							<?php echo smarty_function_dkf_declare(array('type'=>"text",'name'=>"f_l",'queryToApply'=>"legajo LIKE \"%@VALUE@%\""),$_smarty_tpl);?>


                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_filters', array('name'=>"filters",'class'=>"col-12"));
$_block_repeat2=true;
echo smarty_block_dk_filters(array('name'=>"filters",'class'=>"col-12"), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>

                                <div class="row form-group form-filters">

                                    <div class="col-md-2">
                                        <label>Nombre:</label>
                                        <?php echo smarty_function_dkf_input(array('name'=>"f_n",'class'=>"form-control form-control-sm",'placeholder'=>"Nombre"),$_smarty_tpl);?>

                                    </div>
									
									<div class="col-md-2">
                                        <label>CUIL:</label>
                                        <?php echo smarty_function_dkf_input(array('name'=>"f_c",'class'=>"form-control form-control-sm",'placeholder'=>"CUIL"),$_smarty_tpl);?>

                                    </div>
									
									<div class="col-md-2">
                                        <label>Legajo:</label>
                                        <?php echo smarty_function_dkf_input(array('name'=>"f_l",'class'=>"form-control form-control-sm",'placeholder'=>"Legajo"),$_smarty_tpl);?>

                                    </div>

                                    <div class="col-md-1 col-6 text-center">
                                        <br style="line-height:28px;"/>
                                        <button class="btn btn-sm btn-primary" type="submit">
                                            FILTRAR&nbsp;<span class="fa fa-filter"></span>
                                        </button>
                                    </div>
                                    <div class="col-md-1 col-6 text-center">
                                        <br style="line-height:28px;"/>
                                        <a class="btn btn-sm btn-primary" href="empleados.php">
                                            LIMPIAR&nbsp;<span class="fa fa-refresh"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php $_block_repeat2=false;
echo smarty_block_dk_filters(array('name'=>"filters",'class'=>"col-12"), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->_subTemplateRender("file:includes/print_count_listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <table class="table table-sm table-hover lister">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="">Nombre</th>
                                        <th class="text-center">CUIL</th>
                                        <th class="text-center">Legajo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dk_lister', array());
$_block_repeat2=true;
echo smarty_block_dk_lister(array(), null, $_smarty_tpl, $_block_repeat2);
while ($_block_repeat2) {
ob_start();
?>


                                        <?php smarty_function_dkl_getdao(array('assign'=>"daoEmpleado"),$_smarty_tpl);?>

                                        <tr>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['daoEmpleado']->value->id_empleado;?>
</td>
                                            <td class=""><?php echo $_smarty_tpl->tpl_vars['daoEmpleado']->value->nombre;?>
</td>
											<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['daoEmpleado']->value->cuil;?>
</td>
                                            <td class=""><?php echo $_smarty_tpl->tpl_vars['daoEmpleado']->value->legajo;?>
</td>

                                            <td class="text-center">
                                                <a href="empleados.php?action=upd&id_empleado=<?php echo $_smarty_tpl->tpl_vars['daoEmpleado']->value->id_empleado;?>
" class="btn btn-default"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                            </td>
                                        </tr>
                                    <?php $_block_repeat2=false;
echo smarty_block_dk_lister(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat2);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                                </tbody>
                            </table>
                            <div class="col-12">
                                <?php $_smarty_tpl->_subTemplateRender("file:includes/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            </div>
                        <?php $_block_repeat1=false;
echo smarty_block_dk_daolister(array('table'=>"empleado",'name'=>"emp",'resultsPerPage'=>2,'orderBy'=>"nombre"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
