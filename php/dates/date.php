<?php
$jour = 32;
$mois = 17;
$annee = 2019;

if (checkdate($mois, $jour, $annee)) {
    echo "La date $jour/$mois/$annee est valide.";
} else {
    echo "La date $jour/$mois/$annee est erronée.";
}
?>
<br></br>
<?php
$timestamp = 1000200000;

$date = new DateTime('@' . $timestamp);
echo "La date correspondant au timestamp 1000200000 est : " . $date->format('d/m/Y H:i:s');
?>