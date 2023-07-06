<?php
session_start();

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifier les identifiants
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Vérifier si les identifiants sont corrects
    if ($login === "admin" && $password === "admin") {
        // Initialiser la variable de session
        $_SESSION["auth"] = "ok";
        header("Location: page_protegee.php"); // Rediriger vers la page protégée
        exit();
    } else {
        // Identifiants incorrects, détruire la variable de session
        unset($_SESSION["auth"]);
        header("Location: login_form.php"); // Rediriger vers la page de connexion
        exit();
    }
}
?>
