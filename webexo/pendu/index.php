<?php
require "dessin.php";
$mots = file("mots.txt");
$toFind = str_split(trim($mots[rand(0,count($mots))]));
$arrayTirets = [count($toFind)];

function displayTirets($array, $mot){
    for ($i=0;$i<count($mot);$i++){
        $array[$i] = "- ";
        echo "- ";
    }
}

function checkWin($array){
    for ($i=0; $i<count($array);$i++){
        if ($array[$i] == "- "){
            return false;
        }
    }
    return true;
}

$essaisLettres = array();
$lives = 8;

echo dessinPendu($lives);
displayTirets($arrayTirets, $toFind);
echo checkWin($arrayTirets);
while (checkWin($arrayTirets) == false){
    $input = strtoupper(trim(readline("Entrez un lettre: ")));
    if (!in_array($input, $essaisLettres)){
        array_push($essaisLettres, $input);
    }
    else{
        echo "Essayez un autre lettre";
        continue;
    }
    if (in_array($input, $toFind)){
        for ($i=0; $i<count($toFind);$i++){
            if ($input == $toFind[$i]){
                $arrayTirets[$i] = $input;
            }
        }
    }
    else{
        $lives--;
        echo dessinPendu($lives);
    }
    displayTirets($arrayTirets, $toFind);

}





