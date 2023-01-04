<?php
    class Equipe
    {
        // Properties
        private string $nom;
        private Pays $pays;
        private array $carrieres;

        // Construct
        public function __construct(string $nom, Pays $pays)
        {
            $this->nom = $nom;
            $this->pays = $pays;
            $this->carrieres = [];
        }

        // Get and Set noms
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        // Get and Set pays
        public function getPays()
        {
            return $this->pays;
        }
        public function setPays($pays)
        {
            $this->pays = $pays;
        }

        public function __toString()
        {
            return $this->nom . " (" . $this->pays . ")";
        }

        // Ajouter carrière
        public function addCarriere(Carriere $carriere) {
            $this->carrieres[] = $carriere;            
        }
       
        // Methode ajoute équipes
        public function addEquipe(Equipe $equipe) {
            $this->equipes[] = $equipe;
        }

        // Affiche carriere
        public function afficheCarriere() {
            $result = "<h3>Carrière de $this </h3>";
            foreach($this->carrieres as $carriere) {
                $result .= $carriere->getJoueur() . " a joué au " . $carriere->getEquipe() . " en " . $carriere->getanneeDansEquipe();
            }
        }
        
        // Methode affiche infos Equipe
        public function afficheInfosEquipe()
        {
            return "
                    <h3>Infos equipe</h3>
                    <p>$this</p>";
        }
    }
?>
