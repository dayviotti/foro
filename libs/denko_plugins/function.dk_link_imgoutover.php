<?php
/**
 * Funcion que retorna el html para mostrar una imagen en DB.
 * Par�metros obligatorios:
 * - imageDB: ID de la imagen.
 * - thumb: indica la imagen que mostrar�:
 *   En caso de THUMBNAIL, el parametro ser� 'true'
 *   En caso de STREAM, el parametro ser� 'false'
 *   Los par�metros extras ser�n agregados como propiedades a la imagen.
 */
function smarty_function_dk_link_imgoutover($params, &$smarty){
    if(empty($params['url'])){
        Denko::plugin_fatal_error('El par�metro <b>url</b> es requerido.','dk_link_imgoutover');
    }
    if(empty($params['imgout'])){
        Denko::plugin_fatal_error('El par�metro <b>imgout</b> es requerido.','dk_link_imgoutover');
    }
    if(empty($params['imgover'])){
        Denko::plugin_fatal_error('El par�metro <b>imgover</b> es requerido.','dk_link_imgoutover');
    }
    if (!isset($GLOBALS['BUTTONIMAGE-ID'])){
        $GLOBALS['BUTTONIMAGE-ID']=0;
    }
    $GLOBALS['BUTTONIMAGE-ID']++;

    require_once '../denko/dk.html.element.php';
    $link = new DK_HTMLElement('a');
    $link->addProperty('href',$params['url']);
    $link->addJsEvent('onmouseover','permutImage(1,\'BUTTONIMAGE-ID'.$GLOBALS['BUTTONIMAGE-ID'].'\');');
    $link->addJsEvent('onmouseout','permutImage(0,\'BUTTONIMAGE-ID'.$GLOBALS['BUTTONIMAGE-ID'].'\');');
    foreach($params as $key => $value){
        if($key == 'url')     continue;
        if($key == 'imgout')  continue;
        if($key == 'imgover') continue;
        $link->addProperty($key,$value);
    }
    $image = new DK_HTMLElement('img',false);
    $image->addProperty('src',$params['imgout']);
    $image->addProperty('name','BUTTONIMAGE-ID'.$GLOBALS['BUTTONIMAGE-ID']);
    $image->addProperty('border','0');
    $image->addJsEvent('onload','preLoadPermut(this,\''.$params['imgover'].'\');');
    $link->setInnerHtml($image->html());
    return $link->html();
}
