<?php

//<!--
    //exo04_V2.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 04_V2</h1>

    <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    <br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/<br>
    
    Le tableau passé en argument sera le suivant:$\capitales= array (\"France\"=>\"Paris\",\"Allemagne\"=>\"Berlin\",\"USA\"=>\"Washington\",\"Italie\"=>\"Rome\", \"Espagne\" => \"\Madrid\");</p>

    <h2>Résultat</h2>";
    
    // variables de travail
    $capitals = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid"
    ];

    ksort($capitals);
    echo "<table border ='1'>
            <tr>
                <th>Country</th>          
                <th>Capital</th>
                <th>Lien wiki</th>
            </tr>";

    function displayTableHtml($capitals) {
        foreach($capitals as $country => $capital) {
        $country = mb_strtoupper($country);
            echo "<tr>
                    <td>$country</td>
                    <td>$capital</td>
                    <td><a href=\"https://fr.wikipedia.org/wiki/$capital\" target=\"_blank\">Lien</a></td>
                </tr>";
        }
    }
    displayTableHtml($capitals);
    echo"</table>";

?>