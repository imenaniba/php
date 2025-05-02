<?php
require_once 'config.php';
require_once 'Evenement.php';
class DAOEvenement{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function ajoutEvenement(Evenement $evt) {
        $stmt = $this->pdo->prepare("INSERT INTO evenement(titre, date,lieu) VALUES (?, ?, ?)");
        $stmt ->execute([
            $evt->getTitre(),
            $evt->getDate()->format('Y-m-d'),
            evt->getLieu(),
        ]);
    }
}