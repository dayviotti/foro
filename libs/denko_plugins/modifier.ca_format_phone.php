<?php

################################################################################
function smarty_modifier_ca_format_phone($phonestr,$part=false,$format='f'){

    if ($phonestr == '') return '';
    $phone = explode(' ',$phonestr);

    if (count($phone) == 2) {
        if ($part == false && $format == 'f') {
            return '0' . $phone[0] . ' ' . $phone[1];
        } else if ($part == false && $format == 'm') {
            return '0' . $phone[0] . ' 15-' . $phone[1];
        } else if ($part == 'cod_area') {
            return $phone[0];
        } else if ($part == 'numero') {
            return $phone[1];
        }
    }

    return $phonestr;


}
################################################################################
?>
