<!--
    exo_V1_13_gradeAverages.php
=============================================
    By AHJ
-->

<h1>exo_V1_13_gradeAverages.php</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

// fonction qui calcule la moyenne des notes arrondie à 2 chiffres après la virgule
function gradeAverages() {
        
    // variables de travail
    $arrayGrades = [10, 12, 8, 19, 3, 16, 11, 13, 9];

    echo "Les notes obtenuespar l'élève sont : ";
    foreach ($arrayGrades as $Grade) {
        echo "$Grade ";
    }
    echo "<br>";

    $gradeQuantity = count($arrayGrades);
    $sommeGrades = array_sum($arrayGrades);
    $average = round($sommeGrades / $gradeQuantity, 2);
    echo "Sa moyenne générale est donc de : $average";
}
gradeAverages();
?>