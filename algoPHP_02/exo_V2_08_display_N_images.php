<!--
    exo08_V2_display_N_images.php
=============================================
    By AHJ
-->
    <h1>exo08_V2_display_N_images.php</h1>

    <p>.</p>

<?php    
    // variables de travail
    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    $length = 4;

    function repeatImage($url, $length) {

        for ($i=0; $i < $length; $i++) { 
            echo "<img src=\"$url\" alt=\"L'affreux chien.\" width=\"200px\">";
        }

    }
    repeatImage($url, 4);

?>