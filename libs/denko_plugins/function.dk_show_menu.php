<?php
/**
 * Función que se encarga de mostrar el menú superior de la pantalla.
 */
################################################################################
function dk_show_menu($menu, &$maxw, $level=0) {
	$result  = '';
	$maxw    = 0;
	$auxMaxW = 0;
	foreach ($menu as $key => $value) {
		if ($maxw < strlen($key)*7) {
			$maxw = strlen($key)*7;
		}
		if (is_array($value)) {
			$auxul = dk_show_menu($value,$auxMaxW,$level+1);
			$result .= "<li class='heading' ><a>".$key."</a><ul>".$auxul."</ul></li>";
		} else {
			$result .= "<li class='heading' style='width:150px;'><a href=\"$value\" >".$key."</a></li>";
		}
	}

	# Retorno el contenido del bloque.
	return $result;
}
################################################################################
function smarty_function_dk_show_menu($params, &$smarty) {
	return dk_show_menu(RoleControl::getMenu(),$aux);
}
################################################################################
?>