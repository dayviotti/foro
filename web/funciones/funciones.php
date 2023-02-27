<?php

/*BD*/
function connectionBD(){
    error_reporting(0);
        $dbname = 'foro';
        $dbuser = 'root';
        $dbpass = '';
        $dbhost = '127.0.0.1';
        $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,3307);
        return $conexion;
}

function reemplazo($cadena){
    $simbolos = array(':)','<3',':P',':(','x(',':O','X0',':|');
    $emojis = array('&#128513','&#129505','&#128539','&#128542','&#128547','&#128562','&#128565','$#128556');
    $valor = str_replace($simbolos,$emojis,$cadena);
    return $valor;
}

