<?php

################################################################################
function smarty_modifier_numero_a_letras($numero){
    require_once '../commons/NumberToLetterConverter.php';
    $ntlc = new NumberToLetterConverter();
    return $ntlc->to_word(round($numero));
}
################################################################################
?>
