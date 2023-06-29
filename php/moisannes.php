<!DOCTYPE html>
<html>
<head>
    <title>Tableau des mois de l'année</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tableau des mois de l'année</h1>
    <table>
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>
        <?php
        $mois = array(
            "Janvier" => 31,
            "Février" => 28,
            "Mars" => 31,
            "Avril" => 30,
            "Mai" => 31,
            "Juin" => 30,
            "Juillet" => 31,
            "Août" => 31,
            "Septembre" => 30,
            "Octobre" => 31,
            "Novembre" => 30,
            "Décembre" => 31
        );

        foreach ($mois as $nomMois => $nbJours) {
            echo "<tr><td>$nomMois</td><td>$nbJours</td></tr>";
        }
        ?>
    </table>
</body>
</html>
