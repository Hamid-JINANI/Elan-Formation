<?php

//<!--
    //exo01_V2.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 01_V2</h1>

    <p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge(\$texte);</p>

    <h2>Résultat</h2>";
    
    // variables de travail
    $texte = "mon texte en paramètre";

    function convertirMajRouge($texte) {
        $tringToUpper = mb_strtoupper($texte);
        $colorRed = "#DC143C";

        echo "<span style=color:$colorRed;>$tringToUpper<span>";
    }
    convertirMajRouge($texte);
?>
