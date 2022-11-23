<!--
    exo_V1_03_wordReplace.php
    =============================================
    By AHJ
-->

<h1>exo_V1_03_wordReplace.php</h1>

    <p>Soit la phrase « Notre formation commence aujourd'hui ». <br>
    Ecrire un algorithme permettant de remplacer un mot contenu dans cette phrase.</p>

    <h2>Résultat</h2>

    <?php
    $string = "Notre formation DL commence aujourd'hui";
    $string2 = str_replace("aujourd'hui", "demain", $string);

    echo $string."<br>";
    echo $string2;
?>