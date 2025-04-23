<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);

    if (!empty($nom) && !empty($prenom)) {
        echo "Bonjour $nom $prenom";
    } else {
        echo "Erreur lors de la saisie";
    }
} else {
    echo "Veuillez soumettre le formulaire.";
}
?>