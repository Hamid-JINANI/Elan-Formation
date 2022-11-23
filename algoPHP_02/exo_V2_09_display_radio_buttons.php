<!--
    exo09_V2_display_radio_buttons.php
=============================================
    By AHJ
-->
    <h1>exo09_V2_display_radio_buttons.php</h1>

    <p>.</p>

<?php    
    // variables de travail
    $genders = [
        "Masculin" => "",
        "Féminin" => "checked",
        "Autre" => ""
    ];

    function displayRadioButtons($genders) {

        echo '<form>';

        foreach ($genders as $key => $value) { 
            echo '<input type="radio" id="' . $key . '" name="gender" value="' . $value . '" ' . $value . '>
            <label for="' . $value . '">' . $key . '</label><br>';
        }

        '</form>';
    }
    displayRadioButtons($genders);

?>