<!--
    exo_V1_displayListCars_11.php
=============================================
    By AHJ
-->

<h1>exo_V1_displayListCars_11.php</h1>

<p></p>

<h2>Résultat</h2>

<?php
// variables de travail
$arrayCars = ["Peugeot", "Renault", "BMW", "Mercedes"];

// calcul 
$nbrCars = count($arrayCars); // 4

echo "Il y a $nbrCars voitures dans le tableau:<br>
    <ul>
        <li>$arrayCars[0]</li>
        <li>$arrayCars[1]</li>
        <li>$arrayCars[2]</li>
        <li>$arrayCars[3]</li>
    </ul>";

/*
for ($i=0; $i < $nbrCars; $i++) { 
    echo"$arrayCars[$i]<br>";
}
*/
?>