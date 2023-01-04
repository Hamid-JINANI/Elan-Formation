<?php

//<!--
    //exo03_V2.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 03_V2</h1>

    <p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir dans un nouvel onglet (_blank).</p>

    <h2>Résultat</h2>";
    
    // variables de travail
    $httpLink = "https://elan-formation.eu/accueil";

    // Calculs
    function openHtmlPage($httpLink) {
       echo "<a href=\"$httpLink\">Elan Formation</a>";
    }
    openHtmlPage($httpLink);
?>