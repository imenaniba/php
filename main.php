<?php
header('Content-type: text/html; charset=utf-8');
require_once("ListeEvenement.php");
$e1 = new Evenement("Concert de Jazz", "2025-05-10", "Théatre de Bizerte");
$e2 = new Evenement("Atelier de peinture", "2025-06-01", "Centre culturel");
$e3 = new Evenement("Conférence PHP", "2025-06-15", "Université  de Bizerte");

$liste = new ListeEvenement();
$liste->ajouterEvenement($e1);
$liste->ajouterEvenement($e2);
$liste->ajouterEvenement($e3);
echo " --- Liste des événement ---<br>";
$liste->afficherTous();
?>