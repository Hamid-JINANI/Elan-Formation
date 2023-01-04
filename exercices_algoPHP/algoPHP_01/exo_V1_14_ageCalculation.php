<!--
    exo14.php
=============================================
    By AHJ
-->

<h1>Fonction calcul age</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

// variable de travail
$currentDate = new DateTime("2018-05-21");
$birthDate = new DateTime("1985-01-17");

// fonction qui calcule l'âge
function ageCalculation($currentDate, $birthDate) {

    $interval = $currentDate->diff($birthDate);

    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;

    echo "Age de la personne : $years ans $months mois $days jours<br>";
}
ageCalculation($currentDate, $birthDate);
