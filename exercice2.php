<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["phrase"])) {
    $phrase = trim($_POST["phrase"]);
if (!empty($phrase)){
    $nbCaracters = strlen($phrase);
    $nbMots = str_word_count($phrase);
    $premiersCaracteres = substr($phrase, 0, 10);
    $t=explode(" ",$phrase);
    echo count($t);//ou bien sizeof
    $nbcar_sans_espaces=0;
    for($i=0;$i<count($t);$i++)
        $nbcar_sans_espaces+=strlen($t[$i]);
    echo "<p>Nombre totale de caracteres sans compter les espaces <strong>$nbCaracters:</strong></p>";
    echo "<p>Nombre total de mots : <strong>$nbMots</strong></p>";
    echo "<p>les 10 premiers caracteres : <strong>$premiersCaracteres</strong></p>";
}
else {
    echo "<p>Veuillez entrer une phrace,</p>";
}
}
?>