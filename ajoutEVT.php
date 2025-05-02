<?php
require_once 'config.php';
require_once 'Evenement.php';
require_once 'DAOEvenement.php';
$dao = new DAOEvenement($pdo);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $titre = $_POST['titre'] ?? '';
    $titre = $_POST['date'] ?? '';
    $titre = $_POST['lieu'] ?? '';

    if (!empty($titre) && !empty($date) && !empty($lieu)){
        $evenement = new Evenement($titre, new DateTime($date), $lieu);
        $dao->ajouterEvenement($evenement);
        echo"<p> Evenement ajouté avec succés !</p>";
        else{
            echo"<p> Veuillez remplir tous les champs.</p>";
        }

    }
}
?>