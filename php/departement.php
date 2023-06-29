<!DOCTYPE html>
<html>
<head>

<?php
$regions = array(
    "Auvergne-Rhône-Alpes" => array("Ain", "Allier", "Ardèche", "Cantal", "Drôme", "Isère", "Loire", "Haute-Loire", "Puy-de-Dôme", "Rhône", "Savoie", "Haute-Savoie"),
    "Bourgogne-Franche-Comté" => array("Côte-d'Or", "Doubs", "Jura", "Nièvre", "Haute-Saône", "Saône-et-Loire", "Yonne", "Territoire de Belfort"),
    "Bretagne" => array("Côtes-d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Centre-Val de Loire" => array("Cher", "Eure-et-Loir", "Indre", "Indre-et-Loire", "Loir-et-Cher", "Loiret"),
    "Corse" => array("Corse-du-Sud", "Haute-Corse"),
    "Grand Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Île-de-France" => array("Paris", "Seine-et-Marne", "Yvelines", "Essonne", "Hauts-de-Seine", "Seine-Saint-Denis", "Val-de-Marne", "Val-d'Oise"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime"),
    "Nouvelle-Aquitaine" => array("Charente", "Charente-Maritime", "Corrèze", "Creuse", "Dordogne", "Gironde", "Landes", "Lot-et-Garonne", "Pyrénées-Atlantiques", "Deux-Sèvres", "Vienne", "Haute-Vienne"),
    "Occitanie" => array("Ariège", "Aude", "Aveyron", "Gard", "Haute-Garonne", "Gers", "Hérault", "Lot", "Lozère", "Hautes-Pyrénées", "Pyrénées-Orientales", "Tarn", "Tarn-et-Garonne"),
    "Pays de la Loire" => array("Loire-Atlantique", "Maine-et-Loire", "Mayenne", "Sarthe", "Vendée"),
    "Provence-Alpes-Côte d'Azur" => array("Alpes-de-Haute-Provence", "Hautes-Alpes", "Alpes-Maritimes", "Bouches-du-Rhône", "Var", "Vaucluse"),
    "La Réunion" => array("La Réunion"),
    "Guadeloupe" => array("Guadeloupe"),
    "Martinique" => array("Martinique"),
    "Guyane" => array("Guyane"),
    "Mayotte" => array("Mayotte")
);

ksort($regions);

echo "<h2>Liste des régions suivie du nom des départements :</h2>";
foreach ($regions as $region => $departements) {
    echo "<p>$region : " . implode(", ", $departements) . "</p>";
}

echo "<h2>Liste des régions suivie du nombre de départements :</h2>";
foreach ($regions as $region => $departements) {
    $nombreDepartements = count($departements);
    echo "<p>$region : $nombreDepartements départements</p>";
}
?>
