<?php

$date = DateTime::createFromFormat('d/m/Y', '14/07/2019');
$numSemaine = $date->format('W');

echo "Le numéro de semaine de la date 14/07/2019 est : " . $numSemaine;
?>