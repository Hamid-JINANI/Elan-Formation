<!--
    exo6_V1_06_billCalculation.php
=============================================
    By AHJ
-->

<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles,<br> 
    son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>exo6_V1_06_billCalculation.php</h2>

<?php
    // variables de travail
    $pUnit = 9.99;
    $quant = 5;
    $tauxTva = 0.2;

    // calcul de la facture
    $pHorsTaxes = $pUnit * $quant;
    $montantTva = $pHorsTaxes * .2;
    $pTttc = $pHorsTaxes + $montantTva;

    echo "Prix unitaire de l’article: $pUnit €<br>
        Quantité: $quant<br>
        Taux de TVA: $tauxTva<br>
        Le montant de la facture à régler est de : $pTttc € <br>";
?>