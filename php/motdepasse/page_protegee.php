<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== "ok") {
    header("Location: login_form.php"); // Rediriger vers la page de connexion
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page protégée</title>
</head>
<body>
    <h2>Bienvenue sur la page protégée</h2>
    <p>Cette page n'est accessible qu'aux utilisateurs authentifiés.</p>
</body>
</html>
