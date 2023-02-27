<?php

/**
 * Reglas para pluralizar un sustantivo en castellano:
 * 1. Si el sustantivo termina en vocal no t�nica, se a�ade -s. Por ejemplo sala - salas, 
 *      coche � coches. Los sustantivos terminados en -� (acentuada) tambi�n hacen el plural
 *      en �s, por ejemplo beb� � beb�s.
 * 2. Si el sustantivo termina en -� o -� (t�nicas), se a�ade -es. Por ejemplo esqu� -
 *      esqu�es, �and� - �and�es, marroqu� � marroqu�es. Se est� generalizando el pluralizar
 *      estas palabras a�adiendo s�lo -s (esqu�s, �and�s) como parte de un proceso de
 *      regularizaci�n del sistema morfol�gico del espa�ol. Algunas gram�ticas establecen
 *      que las palabras terminadas en -� (t�nica) se les a�ade tambi�n �es al hacer el plural
 *      (faral� - faralaes).
 * 3. Si el sustantivo termina en consonante (excepto z), se a�ade -es. Por ejemplo papel -
 *      papeles, �lbum - �lbumes. La gran mayor�a de las palabras que terminan en -y siguen
 *      esta regla como ley - leyes, rey - reyes. Sin embargo hay excepciones como palabras
 *      cuya y en el plural suena [i], no [y]: jersey - jers�is.
 * 4. Si el sustantivo termina en -z, �sta se cambia a c y se a�ade -es. Por ejemplo l�piz
 *      - l�pices, matiz � matices.
 * 5. Los sustantivos que acaban en -s o -x y no son agudos, permanecen invariables para formar
 *      el plural, por ejemplo el viernes - los viernes, el t�rax - los t�rax, el virus �
 *      los virus, el cumplea�os � los cumplea�os.
 * 6. Sustantivos que s�lo admiten la forma singular. Por ejemplo el cenit, el este, el oeste,
 *      el norte, el sur, la sed, la salud.
 * 7. Sustantivos que s�lo admiten la forma plural, por ejemplo las gafas, las nupcias,
 *      las tenazas, las vacaciones, los v�veres.
 * 8. Sustantivos que se pueden usar en su forma singular y plural: el pantal�n/los pantalones,
 *      la tijera/las tijeras.
 * 9. Los apellidos tienden a no pluralizarse, pero se est� haciendo m�s com�n la pluralizaci�n
 *      entre los hablantes de espa�ol, por ejemplo los Gonz�lez, los Garc�a, los Navarrete
 *      (los Gonz�lez, los Garc�as, etc.).
 * 10. En los sustantivos compuestos, s�lo el segundo elemento puede pluralizarse, siguiendo
 *      las reglas de pluralizaci�n, por ejemplo la pelirroja - las pelirrojas, el ferrocarril
 *      -los ferrocarriles. 
 */
 /**
 * Type: function
 * <br>
 * Name: dk_plural
 * <br>
 * Purpose: Pasa un sustantivo a plural.
 * Input:
 * <br>
 *   
 * - Requeridos
 *   - noun = El sustantivo que se desea pluralizar.
 * 
 * - Opcionales
 *   - composedAction = Decide que hacer cuando el sustantivo es compuesto. Los posibles valores
 *                      son:
 *                      'last': Convierte a plural solo la �ltima palabra del sustantivo.
 *                      N�mero: El n�mero de palabra a pluralizar. Por ejemplo si es 0, se pluraliza
 *                              solo la primer palabra; 1 solo la segunda palabra, etc. Si este valor,
 *                              es mayor al n�mero total de palabras, se plica la cci�n por defecto.
 *                      'all': Se pluralizan todas las palabras. Esta es la acci�n por defecto.
 *
 * @author Denko Developers Group <info at dokkogroup dot com dot ar>
 * @version 1.0
 * @param array
 * @param Smarty
 * @return string
 */
################################################################################
function smarty_modifier_dk_plural($noun, $composedAction = false) {
    
    $words = explode(' ',$noun);
    
    if (count($words) === 1) {
        return pluralizeWord($words[0]);
    } else {
        
        if (is_numeric($composedAction)) {
            if (count($words) > $composedAction) {
                $words[$composedAction] = pluralizeWord($words[$composedAction]);
                return implode(' ', $words);
            }
        }
        
        if($composedAction === 'last') {
            $pos = count($words) - 1;
            $words[$pos] = pluralizeWord($words[$pos]);
            return implode(' ', $words);
        }
        
        $return = '';
        foreach($words as $word) {
            if ($return !== '') {
                $return .= ' ';
            }
            $return .= pluralizeWord($word);
        }
        return $return;
    }
}

function pluralizeWord($aWord) {
    $trimmedWord = trim($aWord);
    $trimmedWordWithoutLastChar = substr($trimmedWord, 0, strlen($trimmedWord) - 1);
    $lastChar = substr($trimmedWord, strlen($trimmedWord) - 1, 1);
    
    if (isNonTonicVowel($lastChar)) {
        return $trimmedWord . 's';
    }elseif (isTonicVowel($lastChar)) {
        return $trimmedWord . 'es';
    }
    elseif ($lastChar === 'z') {
        return $trimmedWordWithoutLastChar . 'c' . 'es';
    } elseif ($lastChar === 's') {
        return $trimmedWord;
    } else {
        return $trimmedWord . 'es';
    }
    
}

function isTonicVowel($aChar) {
    return "�" === $aChar || "�" === $aChar;
}

function isNonTonicVowel($aChar) {
    return "a" === $aChar || "e" === $aChar || "i" === $aChar || "o" === $aChar || "u" === $aChar || "�" === $aChar || "�" === $aChar || "�" === $aChar; 
}
//Este es un algoritmo para silabizar palabras. Falta probarlo.
//Para consultas sobre el algoritmo, consultar: \\tutifruti.dojo\tutoriales\algoritmo-syllabifier.pdf
/*function syllabify($word) {
    
    $P = array( 'circun', 'cuadri', 'cuadru', 'cuatri','quinqu', 'archi', 'arqui', 'citer',
                'cuasi', 'infra', 'inter', 'intra', 'multi', 'radio', 'retro', 'satis',
                'sobre', 'super', 'supra', 'trans', 'ulter', 'ultra', 'yuxta', 'ante', 'anti',
                'cata', 'deci', 'ecto', 'endo','hemi', 'hipo', 'meta', 'omni', 'pali', 'para',
                'peri', 'post', 'radi', 'tras', 'vice', 'cons', 'abs', 'ana', 'apo', 'arz',
                'bis', 'biz', 'cis', 'com', 'con', 'des', 'dia', 'dis', 'dis', 'epi', 'exo', 'met',
                'pen', 'pos', 'pre','pro', 'pro', 'tri', 'uni', 'viz', 'ins', 'nos');
    $V = array('a','e','i','o','u');
    $Vs = array('a','e','o');
    $Vw = array('i','u');
    $Vwa = array('�','�');
    $C = array('b','c','d','f','g','h','j','k','l','m','n','�','p','q','r','s','t','u','v','w','x','y','z');
    
    $N = $T = "";
    $i = 0;
    
    foreach ($P as $Px) {
        if (strpos($word,$Px) === 0) {
            $N = $Px . '-';
            $i = strlen($Px);//$pos - 1;
            break;
        }
    }
    
    for ($i; $i < strlen($word); $i++) {
         if ($i - 1 < 0) {
             $prev = '';
         } else {
            $prev = charAt($word,$i - 1);    
         }
         $curr = charAt($word,$i);
         $next = charAt($word,$i + 1);
         
         echo $i . ' ' . $prev .' ' . $curr . ' ' . $next . '<br>';  
         if ( ((in_array($prev,$Vs) || in_array($prev,$Vwa)) && in_array($curr,$Vs)) ||
               (in_array($prev,$V) && in_array($curr,$Vwa))) {
                $N .= '-';
                $T = $curr;
                echo "1<br>";
                continue;
        }
        
        if ((in_array($curr,$C) && in_array($next,$V)) || (in_array($next,$Vwa) && $T !== '')) {
           
            if (($curr === 'l' ||  $curr === 'r') && in_array($prev,$C)) {
                
                if ($i > 1) {
                    echo "2.1.1<br>";
                    $T = substr($T,0,strlen($T) - 1);
                    $N .= $T .'-';
                    $T = $prev . $curr;
                } else {
                    $T .= $curr;
                    echo "2.1.2<br>";                    
                }
                
            } else {
                $N .= $T . '-';
                $T = $curr;
                echo "2.1.3<br>";
            }
            
            
        } else {
            $T .= $curr;
            echo "2.2<br>";
        }
        echo '-->N: ' . $N . ' T:' . $T . '<br>';
    }
    
    return $N . $T;
    
    
}

function charAt($str,$pos) {
    return (substr($str,$pos,1) !== false) ? substr($str,$pos,1) : -1;
}*/
################################################################################