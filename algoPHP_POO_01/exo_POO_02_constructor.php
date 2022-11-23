<!--
    exo_POO_02_constructor.php
    =============================================
    By AHJ
-->
<h1>exo_POO_02_constructor.php</h1>

<p></p>

<?php    
    class Computer {        // Création de la classe Computer 
        private $_brand;    // Création des attributs en mode private 

        public function __construct($brand) {   // Création du constructeur __construct()
            $this->_brand = $brand;        // $this permet de faire référence à l'instance de l'objet dans une méthode
        }
    }
    $workPlace = new Computer("Samsung");
    var_dump($workPlace);   
?>