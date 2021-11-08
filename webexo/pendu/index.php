<?php
require "dessin.php";
$mots = file("mots.txt");
$toFind = str_split(trim($mots[rand(0,count($mots))]));
$arrayTirets = [strlen(trim($toFind))];
for ($i=0;$i<strlen($toFind);$i++){
        $arrayTirets[$i] = "- ";
        echo "- ";
}
$essaisLettres = array();
$win = false;
$lost = false;
while (!$win || !$lost){
    $input = strtoupper(readline("Entrez un lettre: "));
    if (!in_array($input, $essaisLettres)){
        $essaisLettres[] = $input;
    }
    else{
        echo "Essayez un autre lettre";
        continue;
    }
    if (in_array($input, $toFind)){
        //TODO
    }

}





