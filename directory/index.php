<?php
//$dir = opendir("C:\Users\basac\Documents\Web\webexo");
//while($file = readdir($dir)){
//    echo $file;
//    echo "<br>";
//}
//closedir($dir);
$a = 'bonjour tout le monde';
echo 'valeur de $a avant la bibliotheque :'.$a . '<br>';
include ('bibliotheque.inc.php');
echo 'valeur de $a apres la bibliotheque :'.$a.'<br>';
