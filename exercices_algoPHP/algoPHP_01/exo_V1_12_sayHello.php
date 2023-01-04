<!--
    exo_V1_12_sayHello.php
=============================================
    By AHJ
-->

<h1>exo_V1_12_sayHello.php</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)<br><br>
Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>

<h2>Résultat</h2>

<?php
// calcul 
/**/
function sayHello() {

    // variables de travail
    $arrayStagiaires = [
        "Mickaël" => "FR", 
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG"
    ];
    
    // boucle foreach pour afficher le bonjour au stagiaires (ordre de saisie)
    foreach ($arrayStagiaires as $nickName => $nationality) {
       if ($nationality == "FR") {
            $hello = "Salut";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ESP") {
            $hello = "Hola";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ENG") {
            $hello = "Hello";
            echo "$hello  $nickName<br>";
        }
    }

    // trier le tableau associatif   
    ksort($arrayStagiaires);

    echo "<br>";    

    // boucle foreach pour afficher le bonjour au stagiaires (ordre de alphabétique)
    foreach ($arrayStagiaires as $nickName => $nationality) {
       if ($nationality == "FR") {
            $hello = "Salut";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ESP") {
            $hello = "Hola";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ENG") {
            $hello = "Hello";
            echo "$hello  $nickName<br>";
        }
    }
}
sayHello();
?>