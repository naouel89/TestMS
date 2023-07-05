<?php

$heureCourante = date('H\hi');

echo "L'heure courante est : " . $heureCourante;
?>
<br>
<br>
<?php
$dateCourante = new DateTime();
$dateCourante->add(new DateInterval('P1M'));

echo "La date après avoir ajouté 1 mois : " . $dateCourante->format('d/m/Y');


?>