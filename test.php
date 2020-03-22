<?php
include 'utils.php';
$texte = "baye niAss 1 HSHHAcc cctyyjjuyyaA";
echo my_count($texte);
for($i=0;$i < my_count($texte); $i++){
    echo $texte[$i]." is alpha : ".is_caractere($texte[$i])."<br/>";
}

echo my_change_casse($texte, 1);