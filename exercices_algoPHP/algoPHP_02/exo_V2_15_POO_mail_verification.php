<!--
    exo_V2_15_POO_mail_verification.php
    =============================================
    By AHJ
-->
    <h1>exo_V2_15_POO_mail_verification.php</h1>

    <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format</p>

<?php    
    $email = "elan@elan-formation.fr";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse $email est une adresse e-mail valide";
    } else {
        echo "L'adresse $email est une adresse e-mail invalide";
    }
?>