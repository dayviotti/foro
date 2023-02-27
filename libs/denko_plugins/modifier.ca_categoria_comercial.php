<?php

################################################################################
function smarty_modifier_ca_categoria_comercial($cat,$table=true){
    if ($cat == 'A') {
        return $table ?
                '<td class="total bg-success text-white" style="font-weight: bold; text-align: center;">A</td>' :
                '<span class="total bg-success text-white" style="display: inline-block; margin-top: 8px; font-weight: bold; text-align: center; padding: 2px 8px;">A</span>';
    } elseif ($cat == 'P') {
        return $table ?
                '<td class="total bg-primary text-white" style="font-weight: bold; text-align: center;">P</td>':
                '<span class="total bg-primary text-white" style="display: inline-block; margin-top: 8px; font-weight: bold; text-align: center; padding: 2px 8px;">P</span>';
    } elseif ($cat == 'R') {
        return $table ?
                '<td class="total bg-warning text-white" style="font-weight: bold; text-align: center;">R</td>' :
                '<span class="total bg-warning text-white" style="display: inline-block; margin-top: 8px; font-weight: bold; text-align: center; padding: 2px 8px;">R</span>';
    } else {
        return $table ?
                '<td class="total" style="font-weight: bold; text-align: center;">?</td>' :
                '<span class="total" style="display: inline-block; margin-top: 8px; font-weight: bold; text-align: center; padding: 2px 6px;">?</span>';
    }
}
################################################################################
?>
