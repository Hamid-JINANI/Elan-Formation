<!--
    exo_V1_07_returnAge.php
=============================================
    By AHJ
-->

<h1>exo_V1_07_returnAge.php</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:</p>

<h2>Résultat</h2>

<?php
    // Variables de travail
    $age = 18;

    // Conditions de vérification de l'âge
    if ($age == 6 || $age == 7) {
        $category = "Poussin";
    } elseif ($age == 8 || $age == 9) {
        $category = "Pupille";
    } elseif ($age == 10 || $age == 11) {
        $category = "Minime";
    } elseif ($age == 12) {
        $category = "Cadet";
    } else {
        $category = "La catégorie n'est pas précisée.";
    }

    echo "L'enfant qui à $age ans appartient à la catégorie « $category ».<br>";
?>