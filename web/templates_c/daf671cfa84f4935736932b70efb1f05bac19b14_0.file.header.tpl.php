<?php
/* Smarty version 3.1.30, created on 2023-02-17 16:36:01
  from "C:\xampp\htdocs\skeleton\web\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63efd7217e66a7_74055568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf671cfa84f4935736932b70efb1f05bac19b14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\skeleton\\web\\templates\\header.tpl',
      1 => 1676660973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63efd7217e66a7_74055568 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_dk_basehref')) require_once 'C:\\xampp\\htdocs\\skeleton\\libs\\denko_plugins\\function.dk_basehref.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<base href="<?php echo smarty_function_dk_basehref(array(),$_smarty_tpl);?>
"/>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "TITULO DEFAULT" : $tmp);?>
</title>

    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="icons/css/font-awesome.min.css" rel="stylesheet" >
    <link href="icons/css/icofont.css" rel="stylesheet" >
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-success">
        

        <a class="navbar-brand" href="<?php echo smarty_function_dk_basehref(array(),$_smarty_tpl);?>
">DEMO <sub>skeleton</sub></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle small" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entidades
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="empleados.php">Empleados</a>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0);">Item</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">SubItem</a>
                                <a class="dropdown-item" href="#">SubItem</a>
                                <a class="dropdown-item" href="#">SubItem</a>
                                <a class="dropdown-item" href="#">SubItem</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0);">Item</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">SubItem</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle small" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Item
                    </a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">Titulo Items</h6>
                        <a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle small" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Item
                    </a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">Titulo Items</h6>
                        <a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle small" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Item
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>
						<a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle small" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
                    <div class="dropdown-menu dropdown-menu-right" style="left: auto !important;">
                    	<h6 class="dropdown-header">Titulo Items</h6>
                        <a class="dropdown-item" href="#">Item</a>
                        <h6 class="dropdown-header">Titulo Items</h6>
                        <a class="dropdown-item" href="#">Item</a>
                        <a class="dropdown-item" href="#">Item</a>
						<a class="dropdown-item" href="#">Item</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<div class="main-container" style="margin-top: 58px;"><?php }
}
