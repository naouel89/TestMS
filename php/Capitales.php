<?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
    // Tri des capitales par ordre alphabétique
    ksort($capitales);
    
    // Affichage des capitales suivies du nom du pays
    echo "<h2>Liste des capitales (par ordre alphabétique) suivie du nom du pays :</h2>";
    foreach ($capitales as $capitale => $pays) {
        echo "<p>$capitale - $pays</p>";
    }
    
    // Tri des pays par ordre alphabétique
    asort($capitales);
    
    // Affichage des pays suivis du nom de la capitale
    echo "<h2>Liste des pays (par ordre alphabétique) suivie du nom de la capitale :</h2>";
    foreach ($capitales as $capitale => $pays) {
        echo "<p>$pays - $capitale</p>";
    }
    
    // Nombre de pays dans le tableau
    $nombrePays = count($capitales);
    echo "<h2>Nombre de pays dans le tableau : $nombrePays</h2>";
    ?>
    
<!DOCTYPE html>
<html>
<head>
    <title>Capitales</title>
    <style>
        h2 {
            margin-top: 20px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Liste des capitales et pays</h1>

    <h2>Liste des capitales (par ordre alphabétique) suivie du nom du pays :</h2>
    <?php
    foreach ($capitales as $capitale => $pays) {
        echo "<p>$capitale - $pays</p>";
    }
    ?>

    <h2>Liste des pays (par ordre alphabétique) suivie du nom de la capitale :</h2>
    <?php
    foreach ($capitales as $capitale => $pays) {
        echo "<p>$pays - $capitale</p>";
    }
    ?>

    <h2>Nombre de pays dans le tableau :</h2>
    <p><?php echo $nombrePays; ?></p>

    <h2>Capitales commençant par 'B' :</h2>
    <?php
    foreach ($capitales as $capitale => $pays) {
        echo "<p>$capitale - $pays</p>";
    }
    ?>

 
</body>
</html>
