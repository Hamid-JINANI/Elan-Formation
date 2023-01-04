<?php

//<!--
    //exo06_V2_dropdownList.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 06_V2_dropdownList</h1>

    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>";
    
    // variables de travail
    $elements = array("Monsieur", "Madame", "Mademoiselle");
    //$displayInput($namesInput);

    echo "<form><select name=\"civilities\" id=\"civilities\">";
            
    function populateDropDownList($elements) {
        foreach($elements as $elements) {

            echo "<option value=\"$elements\">$elements</option><br>";
        }
    }
    populateDropDownList($elements);

    echo "</select></form>";

?>