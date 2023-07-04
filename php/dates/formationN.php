<?php

$dateActuelle = date("Y-m-d"); // Date actuelle au format 'YYYY-MM-DD'
$dateFin = '2023-07-28'; // Date de fin de la formation

$dateFinFormation = strtotime($dateFin);
$dateActuelle = strtotime($dateActuelle);

$diffSeconde = $dateFinFormation - $dateActuelle;
$diffJour = floor($diffSeconde / (60*60*24));

echo "Il reste ".$diffJour." jours avant la fin de ma formation.";

$heureActuelle = date("H");
$minuteActuelle = date("i");
$secondeActuelle = date("s");

echo "<br><br>";
echo "Il est actuellement ".$heureActuelle."h".$minuteActuelle."m".$secondeActuelle."s.";

?>