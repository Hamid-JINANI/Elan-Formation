<!--
    exo_V2_11_format_date_Fr_nbr_only.php
=============================================
    By AHJ
-->
    <h1>exo_V2_11_format_date_Fr_nbr_only.php</h1>

    <p>Ecrire une fonction personnalisée qui formate une date en français.</p>

<?php    
    // variables de travail
    $date = "2018-02-23";

    function format($date) {

        $date_Fr = DateTimeImmutable::createFromFormat('U', time());
            
        echo $date_Fr->format('d-m-Y'); # => ""
        
    }
    format($date);

?>