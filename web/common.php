<?php
require_once '../libs/Smarty.class.php';
require_once '../denko/dk.denko.php';

Denko :: openDB();

// Se abre la sesion con el servidor
Denko::sessionStart();

set_time_limit(0);
date_default_timezone_set('America/Argentina/Buenos_Aires');
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING & ~E_DEPRECATED);