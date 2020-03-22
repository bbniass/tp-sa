<<<<<<< HEAD
<?php
include 'utils.php';
$texte = "baYe NiAss 11";

=======
<?php
include 'utils.php';
$texte = "baye niAss 1 HSHHAcc cctyyjjuyyaA";
echo my_count($texte);
for($i=0;$i < my_count($texte); $i++){
    echo $texte[$i]." is alpha : ".is_caractere($texte[$i])."<br/>";
}

>>>>>>> cf197dbc38e99ea4e1465641c858a2b51e9b4117
echo my_change_casse($texte, 1);