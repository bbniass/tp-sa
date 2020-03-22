<?php
function is_caractere($car){
    return ($car >= 'A' && $car <= 'Z') || ($car >= 'a' && $car <= 'z');
}
function is_lowercase($car){
    return ($car >= 'a' && $car <= 'z');
}
function is_uppercase($car){
    return ($car >= 'A' && $car <= 'Z');
}
function my_count($texte){
    for($i = 0; true; $i++ ){
        if(!isset($texte[$i])){
            break;
        }
    }
    return $i;
}

function getUpperChar($car){
    if(is_lowercase($car)){
        return chr(ord($car) - 32);
    }
    return $car;
}

function getLowerChar($car){
    if(is_uppercase($car)){
        return chr(ord($car) + 32);
    }
    return $car;
}


function my_change_casse($texte, $uppercase = 0){
    $upper = "";
    for($i=0;$i < my_count($texte); $i++){
        if($uppercase){
            $upper .= getUpperChar($texte[$i]);
        }
        else{
            $upper .= getLowerChar($texte[$i]);
        }
    }
    return $upper;
}