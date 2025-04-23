<!DOCTYPE html>
<html>
<head>
    <title>exercice</title>
</head>
<body>
    <form method="post" action="">
        <h3>Si on ne met pas d'attribut action au formulaire, que va-t-il se passer ?</h3>
        <input type="radio" name="r1" value="vide"> Ça va afficher une page vide<br>
        <input type="radio" name="r1" value="reload"> Ça va recharger la même page<br>
        <input type="radio" name="r1" value="404"> Ça va afficher une erreur 404<br>
        
        <h3>Quel est l'attribut à rajouter à une case à cocher pour qu'elle soit cochée par défaut ?</h3>
        <input type="radio" name="r2" value="selected"> selected<br>
        <input type="radio" name="r2" value="checked"> checked<br>
        <input type="radio" name="22" value="signed"> signed<br>
        
        <h3>Quelle est la valeur d’une variable correspondant à une case à cocher cochée ?</h3>
        <input type="radio" name="r3" value="1"> 1<br>
        <input type="radio" name="r3" value="checked"> checked<br>
        <input type="radio" name="r3" value="on"> on<br>
        
        <h3>Que va produire ce code HTML ?</h3>
        <code>&lt;input type="hidden" name="age" value="18"&gt;</code><br>
        <input type="radio" name="r4" value="hidden"> Une variable $_POST['hidden'] qui aura une valeur 18<br>
        <input type="radio" name="r4" value="age18"> Une variable $_POST['age'] qui aura une valeur 18<br>
        <input type="radio" name="r4" value="string"> Une variable $_POST['age'] qui aura une valeur "hidden"<br>
        
        <h3>Quelle sera la variable créée, et quelle sera la valeur, si on ne change pas le texte par défaut de la zone de texte ?</h3>
        <code>&lt;textarea name="news" rows="8" cols="45"&gt;Taper la news ici&lt;/textarea&gt;</code><br>
        <input type="radio" name="r5" value="null"> $_POST['news'] = NULL;<br>
        <input type="radio" name="r5" value="textarea"> $_POST['textarea'] = "Taper la news ici.";<br>
        <input type="radio" name="r5" value="news"> $_POST['news'] = "Taper la news ici.";<br>
        
        <input type="submit" name="submit" value="Valider">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $score = 0;
        $reponses_correctes = [
            'r1' => 'reload',
            'r2' => 'checked',
            'r3' => 'on',
            'r4' => 'age18',
            'r5' => 'news'
        ];
        
        foreach ($reponses_correctes as $question => $reponse) {
            if (isset($_POST[$question]) && $_POST[$question] == $reponse) {
                $score++;
            }
        }
        
        echo "<h3>Votre score est : $score / 5</h3>";
    }
    ?>
</body>
</html>