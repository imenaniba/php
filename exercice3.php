<?php
Session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercice3.php" method="POST">
        <label>nom</label><input type="text" name="nom"><br>
        <label>Qte</label><input type="text" name="Qte"><br>
        <label>PU</label><input type="text" name="PU"><br>
        <button type="submit" name="ajouter">Ajouter</button>
        <button type="submit" name="afficher">Afficher</button>
    </form>
</body>
</html>
<?php

function ajouter()
{   global $_SESSION;
    if(!isset($_SESSION['produits']))
        $_SESSION['produits']=array();
    if(!empty($_POST['nom'])&&!empty($_POST['Qte'])&&!empty($_POST['PU']))

    {
        $nom=$_POST["nom"];
        $qte=$_POST["Qte"];
        $pu=$_POST["PU"];
        $produit=array($nom=>array($qte,$pu));
        array_push($_SESSION['produits'],$produit);
        echo "Ajout avec succes";
    }
    else{
    echo "veuillez remplir vos champs";}
    
}
if(isset($_POST["ajouter"]))
    ajouter();
?>