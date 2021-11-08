<?php
require "dessin.php";
$mots = file("mots.txt");
$toFind = $mots[rand(0,count($mots))];
$array = [strlen($toFind)];
for ($i=0;$i<=strlen($toFind);$i++){
    $array[$i] = "-";
    echo $array[$i];
}



