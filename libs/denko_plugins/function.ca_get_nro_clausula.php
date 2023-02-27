<?php
/**
 *
 */
################################################################################
function smarty_function_ca_get_nro_clausula($params,&$smarty){

    switch ($params['nro']) {
        case 1: return 'PRIMERA';
        case 2: return 'SEGUNDA';
        case 3: return 'TERCERA';
        case 4: return 'CUARTA';
        case 5: return 'QUINTA';
        case 6: return 'SEXTA';
        case 7: return 'SÉPTIMA';
        case 8: return 'OCTAVA';
        case 9: return 'NOVENA';
        case 10: return 'DÉCIMA';
        case 11: return 'DÉCIMO PRIMERA';
        case 12: return 'DÉCIMO SEGUNDA';
        case 13: return 'DÉCIMO TERCERA';
        case 14: return 'DÉCIMO CUARTA';
        default: ;
    }

    return 'DECONOCIDA';

}
################################################################################
?>