<?php
function smarty_function_html_select_motivos($params) {

    global $motivos;

    $class = isset($params['class']) ? $params['class'] : '';
    $style = isset($params['style']) ? $params['style'] : '';
    $name = isset($params['name']) ? $params['name'] : '';
    $id = isset($params['id']) ? $params['id'] : '';
    $disabled = isset($params['disabled']) && $params['disabled'] == true ? ' disabled ' : '';
    $val = isset($params['value'])? $params['value'] : '';

    echo '<select name="'.$name.'" class="'.$class.'" style="'.$style.'" id="'.$id.'" '.$disabled.'>';
    echo '<option value="-1">NO ESPECIFICADO</option>';
    foreach($motivos as $key => $value) {
        $selected = ($key == $val) ? ' selected="selected" ' : '';
        echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
    }
    echo '</select>';


}
