<?php

$annee = 2024; // Année à vérifier

$date = DateTime::createFromFormat('Y-m-d', $annee . '-02-29');

if ($date !== false && $date->format('Y') === $annee && $date->format('m') === '02' && $date->format('d') === '29') {
    echo "L'année $annee est bissextile.";
} else {
    echo "L'année $annee n'est pas bissextile.";
}
?>