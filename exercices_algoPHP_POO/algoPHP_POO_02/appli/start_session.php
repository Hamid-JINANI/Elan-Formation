<?php
    session_save_path();        // Chemin où sont sauvegardé les données. (faire un echo pour visualiser)
    session_start();
    echo "Salut";
    $_SESSION["user"] = "Freaky";
?>

