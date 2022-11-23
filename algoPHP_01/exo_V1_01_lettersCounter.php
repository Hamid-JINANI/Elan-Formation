<!--
    exo_V1_01_lettersCounter.php
    =============================================
    By AHJ
-->

<h1>exo_V1_01_lettersCounter.php</h1>

<p>Soit la phrase " Notre formation commence aujourd'hui ". <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase.</p>

<h2>Résultat</h2>

<?php
    $string = "Notre formation DL commence aujourd'hui";
    $nbrCaracteres = strlen($string);

    echo "La phrase « $string » contient $nbrCaracteres caractères<br>";
    echo "La phrase « $string » contient " . strlen($string) . " caractères<br>";
?>