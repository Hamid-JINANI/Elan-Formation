<!--
    exo_V1_08_multiplicationTable.php
=============================================
    By AHJ
-->

<h1>exo_V1_08_multiplicationTable.php</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>

<h2>Résultat</h2>

<?php
    // variables de travail
    $nbrDeLaTable = 8;
    $longueurDeLaTable = 10;

    // boucle pour la table de multiplication (boucle for)
    echo "Boucle for()<br>";
    for ($i=1; $i <= $longueurDeLaTable; $i++) { 
        $resultMultiplication = $i * $nbrDeLaTable;
        echo "$i x $nbrDeLaTable = $resultMultiplication<br>";
    }


    // boucle pour la table de multiplication (boucle while)
    echo "Boucle while()<br>";
    $j = 1;
    while($j <= 10) {
        $resultMultiplication = $j * $nbrDeLaTable;
        echo "$j x $nbrDeLaTable = $resultMultiplication<br>";    
        $j++;
    }
?>