<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $motDePasse = $_POST["mot_de_passe"];

    // Vérifier les informations d'identification dans le fichier utilisateurs.txt
    $fichier = fopen("utilisateurs.txt", "r");
    $utilisateurTrouve = false;

    if ($fichier) {
        while (($ligne = fgets($fichier)) !== false) {
            $infosUtilisateur = explode(",", $ligne);
            $emailEnregistre = trim($infosUtilisateur[3]);
            $motDePasseEnregistre = trim($infosUtilisateur[4]);

            if ($emailEnregistre === $email && $motDePasseEnregistre === $motDePasse) {
                $utilisateurTrouve = true;
                break;
            }
        }

        fclose($fichier);

        if ($utilisateurTrouve) {
            header('Location: page_protegee.php');
            exit();
        } else {
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    } else {
        echo "Une erreur s'est produite lors de l'ouverture du fichier.";
    }
}
?>
