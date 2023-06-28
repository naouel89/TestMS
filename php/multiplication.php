<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Table de multiplication</h1>
    <table>
        <tr>
            <th></th>
            <?php
            // En-têtes de colonnes
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Génération des lignes
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            // Première cellule de la ligne (numéro de ligne)
            echo "<th>$i</th>";
            // Génération des cellules de la ligne (produits)
            for ($j = 1; $j <= 9; $j++) {
                $product = $i * $j;
                echo "<td>$product</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>