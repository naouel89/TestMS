<?php
// Récupérer le contenu du fichier CSV distant
$fileUrl = 'https://ncode.amorce.org/customers.csv';
$fileContent = file($fileUrl);

// Créer une variable pour stocker les lignes du tableau HTML
$tableRows = '';

// Parcourir chaque ligne du fichier CSV
foreach ($fileContent as $line) {
    // Diviser la ligne en valeurs individuelles en utilisant la virgule comme séparateur
    $values = explode(',', $line);

    // Récupérer les champs d'intérêt
    $surname = $values[0];
    $firstname = $values[1];
    $email = $values[2];

    // Ajouter une nouvelle ligne au tableau HTML avec les valeurs
    $tableRows .= "<tr>
        <td>$surname</td>
        <td>$firstname</td>
        <td>$email</td>
    </tr>";
}

// Construire la page web complète avec le tableau HTML
$html = "<html>
<head>
    <title>Liste des nouveaux utilisateurs</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
<body>
    <div class='container'>
        <h1>Liste des nouveaux utilisateurs</h1>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Nom de famille</th>
                    <th>Prénom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                $tableRows
            </tbody>
        </table>
    </div>
</body>
</html>";

echo $html;
?>
