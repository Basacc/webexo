<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
echo "<div style='color: red; font-weight: bold'>".$prenom."</div>";
echo "<div style='font-weight: bold'>".$nom."</div>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
// TODO form nom, prenom, nb enfants => form noms enfants => afficher info