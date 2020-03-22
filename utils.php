<?php
 $caracteres = [['a', 'A'], ['b','B'], ['c','C'],
 ['d','D'], ['e','E'], ['f', 'F'], ['g', 'G'], 
 ['h', 'H'], ['i', 'I'], ['j', 'J'],['k', 'JK'], 
 ['l', 'L'], ['m', 'M'], ['n', 'N'], ['o', 'O'], 
 ['p', 'P'], ['q', 'Q'], ['r', 'R'], ['s', 'S'], 
 ['t', 't'], ['u', 'U'], ['v', 'V'], ['w', 'W'], 
 ['x', 'X'], ['y', 'Y'], ['z', 'Z']];

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

function getUpperChar($car, $uppercase){
    if(is_lowercase($car)){
        return getCaractere($car, $uppercase);
    }
    return $car;
}

function getLowerChar($car, $uppercase){
    if(is_uppercase($car)){
        return  getCaractere($car, $uppercase);
    }
    return $car;
}

function getCaractere($c, $uppercase){
    global $caracteres;
    foreach($caracteres as $car){
        if($car[0] == $c || $car[1] == $c){
           if($uppercase){
            return $car[1];
            }
            else{
                return $car[0];
            } 
        }
        
    }
}


function my_change_casse($texte, $uppercase = 0){
    $upper = "";
    for($i=0;$i < my_count($texte); $i++){
        if($uppercase){
            $upper .= getUpperChar($texte[$i], $uppercase);
        }
        else{
            $upper .= getLowerChar($texte[$i], $uppercase);
        }
    }
    return $upper;
}