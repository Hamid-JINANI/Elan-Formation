<!--
    exo_V2_12_var_dump_test.php
=============================================
    By AHJ
-->
    <h1>exo_V2_12_var_dump_test.php</h1>

    <p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br><br>
        Soit le tableau suivant :<br>
        $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br><br>
        A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<?php    
    // variables de travail
    $arrayData = array(true,"texte",10,25.369,array("valeur1","valeur2"));

    // calculs
    function displayData($arrayData) {

        foreach($arrayData as $arrayData) {

            $dataToDisplay = var_dump($arrayData);

            echo $dataToDisplay."<br>";
        }

    }
    displayData($arrayData);

?>