<!--
    exo_V2_11_format_date_Fr_string.php
    =============================================
    By AHJ
-->
    <h1>exo_V2_11_format_date_Fr_string.php</h1>

    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

<?php    
    // variables de travail
    $date = "2018-02-23";

    // calculs
    function format($date) {

        $formatter = new IntlDateFormatter('fr_Fr', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

        echo $formatter->format(time());
    }
    format($date);

?>