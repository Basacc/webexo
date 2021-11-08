<?php

function affiche ($var1, $var2){
    global $msg1, $msg2;
    echo $msg1. $var1. $msg2. $var2;
}
$msg1 = "Affichage de variable";
$msg2 = "suite affichage de variable";

affiche("valeur1","valeur2");