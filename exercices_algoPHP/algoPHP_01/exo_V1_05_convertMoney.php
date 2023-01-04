<!--
    exo_V1_05_convertMoney.php
    =============================================
    By AHJ
-->

<h1>exo_V1_05_convertMoney.php</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui va la convertir en euros.<br>
Attention, la valeur généré devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php
    //(1 € = 6,55957 FF)
    // la somme en franc en variable
    $nbr = 1000000.00;

    // taux de conversion en euro
    $taux = 6.55957;

    // nombre en euro
    $nbrEnEuro = $nbr / $taux;

    // nombre arrondi
    $nbrEnEuroArrondi = round($nbrEnEuro, 2);

    // formatage du nombre remplace point par virgule et ajout séparateur de milliers
    // Attention renvoye une chaîne de caractère
    $result = number_format($nbrEnEuro, 2, ",", " ");

    echo "Le montant en francs : $nbr<br>
        $nbr francs = $nbrEnEuroArrondi €<br><br>";

    echo "Le montant formaté : $result";
?>