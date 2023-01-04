<?php

//<!--
    //exo02_V2.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 02_V2</h1>

    <p>Soit le tableau suivant:$\capitales= array (\"France\"=>\"Paris\",\"Allemagne\"=>\"Berlin\",\"USA\"=>\"Washington\",\"Italie\"=>\"Rome\");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($\capitales);</p>

    <h2>Résultat</h2>";
    
    // variables de travail
    $capitals = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    ];

    ksort($capitals);
    echo "<table border = '1'>
            <tr>
                <th>Country</th>          
                <th>Capital</th>
            </tr>";

    function displayTableHtml($capitals) {
        foreach($capitals as $country => $capital) {
        $country = mb_strtoupper($country);
            echo "<tr><td>$country</td>
                    <td>$capital</td></tr>";
        }
    }
    displayTableHtml($capitals);
    echo "</table>";

?>