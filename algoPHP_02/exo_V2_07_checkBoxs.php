<?php

//<!--
    //exo07_V2_checkBoxs.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 06_V2_dropdownList</h1>

    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>";
    
    // variables de travail
    $elements = [
        "1" => "",
        "2" => "checked",
        "3" => ""
    ];
           
    function checkboxGenerator($elements) {
        echo "<form><fieldset><div>";
        foreach($elements as $key => $value) {

            echo "<input type=\"checkbox\" id=\"$key\" name=\"choice$key\" $value>
                <label for=\"choix$key\">Choix $key</label><br>";
        }
        echo "</div></fieldset></form>";
    }
    checkboxGenerator($elements);

?>