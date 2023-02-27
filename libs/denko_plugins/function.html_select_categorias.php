<?php
function smarty_function_html_select_categorias($params,&$smarty) {

    global $categorias;
    global $categorias_to_udn;

    if (isset($params['format']) && $params['format'] === 'k:v') {

        $str = '';

        foreach($categorias as $key => $value) {

            if ($str !== '') $str .= '|';

            $str .= $key.':'.$value;

        }

        if (isset($params['assign'])) {
            $smarty->assign($params['assign'],$str);
        } else {
            echo $str;
        }

    } else {

        $class = isset($params['class']) ? $params['class'] : '';
        $style = isset($params['style']) ? $params['style'] : '';
        $name = isset($params['name']) ? $params['name'] : '';
        $id = isset($params['id']) ? $params['id'] : '';
        $disabled = isset($params['disabled']) && $params['disabled'] === true ? ' disabled ' : '';
        $val = isset($params['value'])? $params['value'] : '';

        echo '<select name="'.$name.'" class="'.$class.'" style="'.$style.'" id="'.$id.'" '.$disabled.'>';
        echo '<option value="-1">NO ESPECIFICADO</option>';
        foreach($categorias as $key => $value) {
            $selected = ($key == $val) ? ' selected="selected" ' : '';
            echo '<option value="'.$key.'" '.$selected.' data-id_udn="'.$categorias_to_udn[$key].'">'.$value.'</option>';
        }
        echo '</select>';

    }




}
