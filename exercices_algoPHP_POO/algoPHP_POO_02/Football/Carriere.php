<?php
    class Carriere
    {
        // Properties
        private Joueur $joueur;
        private Equipe $equipe;
        private int $anneeDansEquipe;
        private int $anneeRalliement;

        // Construct
        public function __construct(Joueur $joueur, Equipe $equipe, int $anneeDansEquipe, int $anneeRalliement)
        {
            $this->joueur = $joueur;
            $this->joueur->addCarriere($this);

            $this->equipe = $equipe;
            $this->equipe->addCarriere($this);

            $this->anneeDansEquipe = $anneeDansEquipe;
            $this->anneeRalliement = $anneeRalliement;
        }

        // Get joueur
        public function getJoueur()
        {
            return $this->joueur;
        }
        
        public function getEquipe()
        {
            return $this->equipe;
        }

        public function getAnneeDansEquipe()
        {
            return $this->anneeDansEquipe;
        }
        
        public function getAnneRalliement() {
            return $this->anneeRalliement;
        }

        public function __toString()
        {
            return "<br><br>" .$this->joueur. " " .$this->equipe. " " .$this->anneeDansEquipe. " Année de ralliement à l'équipe : " .$this->anneeRalliement."";
        }

        // Methode affiche infos équipe
        public function afficheInfosEquipe() {
            return "<h3>Infos équipe :</h3>
                <p>" . $this->joueur . "</p>
                <p>" . $this->equipe . "</p>
                <p>" . $this->anneeDansEquipe . "</p>
                <p>" . $this->anneeRalliement . "</p><br>";
        }
    }
?>
