<?php
function tableMultiplication($nbr){
//    for ($i = 0; $i <= 10; $i++) {
//        $result = $i * $nbr;
//        echo "$nbr * $i = $result<br>";
//    }
    $cpt = 0;
    while ($cpt<=10){
        $result = $cpt * $nbr;
        echo "$nbr * $cpt = $result<br>";
        $cpt++;
    }
}

function afficherLettrePrenom($prenom){
    $prenom = strrev($prenom);
    for ($i=0;$i<strlen($prenom);$i++){
        echo "$prenom[$i]<br>";
    }
}

tableMultiplication(readline("Note un nombre: "));
//afficherLettrePrenom(readline("Prenom: "));
