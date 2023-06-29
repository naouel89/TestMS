<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>voici le lien</h2>
<?php
include 'fonction.php';

echo $resultat;
?>
<br></br>
<hr></hr>


<h2>voici le résultat</h2>
<?php



echo $resultatun = somme($tab);
?>   

<br></br>
<hr></hr>

<?php



$message = ""; // Initialise la variable $message

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $motDePasse = $_POST["motDePasse"];
    $resultat = verifierComplexiteMotDePasse($motDePasse);

    if ($resultat) {
        $message = "Le mot de passe respecte les règles de complexité.";
    } else {
        $message = "Le mot de passe ne respecte pas les règles de complexité.";
    }
}
?>

<h2>Vérification du mot de passe</h2>

<form action="appel.php" method="POST">
    <label for="motDePasse">Mot de passe :</label>
    <input type="password" id="motDePasse" name="motDePasse" required>
    <input type="submit" value="Vérifier">
</form>

<?php if (!empty($message)) { ?>
    <p><?php echo $message; ?></p>
<?php } ?>
<br></br>
<hr></hr>


</body>
</html>