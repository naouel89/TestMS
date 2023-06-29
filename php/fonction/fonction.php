<?php
function genererLien($lien, $titre) {

    return "<a href=\"$lien\">$titre</a>";
    
}
$resultat = genererLien("https://www.reddit.com/" , "Reddit Hug" );
?>

<?php
function somme($tab) {
    $somme = 0;
    foreach ($tab as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}

$tab = array(4, 3, 8, 2);
$resultatun = somme($tab);
?>

<?php
function verifierComplexiteMotDePasse($motDePasse) {
    $longueur = strlen($motDePasse);
    $contientChiffre = preg_match('/\d/', $motDePasse);
    $contientMajuscule = preg_match('/[A-Z]/', $motDePasse);
    $contientMinuscule = preg_match('/[a-z]/', $motDePasse);

    if ($longueur >= 8 && $contientChiffre && $contientMajuscule && $contientMinuscule) {
        return true;
    } else {
        return false;
    }
}
?>
