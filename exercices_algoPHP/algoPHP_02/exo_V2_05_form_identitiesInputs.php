<?php

//<!--
    //exo05_V2_form_identitiesInputs.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 05_V2_form_identitiesInputs</h1>

    <p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>";
    
    // variables de travail
    $namesInput = array("Nom", "Prénom", "Ville");

            
    function identitiesInputs($namesInput) {
    
        echo '<form>';  

        foreach($namesInput as $namesInput) {

            echo '
                <label for="#">'.$namesInput.'</label><br>
                <input type="text\" id="#" name="#" required minlength="4" maxlength="18" size="10"></input><br>
                ';
        }
        echo '</form>';
    }
    identitiesInputs($namesInput);


?>