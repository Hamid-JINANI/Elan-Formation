<!--
    exo_V1_04_palindrome.php
    =============================================
    By AHJ
-->

<h1>exo_V1_04_palindrome.php</h1>

<p>Soit la phrase « Engage le jeu que je le gagne » est palindrome.<br>
Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase.</p>

<h2>Résultat</h2>

<?php
    // la chaîne de caractères en variable
    $string = "Engage le jeu que je le gagne";

    // convertir en minuscule
    $strMinus = strtolower($string);

    // supprimer les espaces
    $strNoSpace = str_replace(" ", "", $strMinus);

    // inverser la phrase
    $strInverse = strrev($strNoSpace);

    // comparer

    echo " la phrase en minuscule  « $strMinus » <br>";

    echo " la phrase sans espaces  « $strNoSpace » <br>";

    echo " la phrase inversée  « $strInverse » <br>";

    // la condition pour vérifier si la chaîne de caractère est palidrome
    if ($strNoSpace === $strInverse) {
        echo "La phrase « $string » est palindrome.";
    } else {
        echo "La phrase « $string » n'est pas palindrome.";
    }
?>