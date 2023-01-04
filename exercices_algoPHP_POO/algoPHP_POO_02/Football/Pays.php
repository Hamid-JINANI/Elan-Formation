<?php

    class Pays
    {
        private string $pays;

        public function __construct(string $pays)
        {
            $this->pays = $pays;
            $this->joueurs = [];
            $this->equipes = [];
        }

        // Get and Set Pays
        public function getPays()
        {
            return $this->pays;
        }

        // Get and Set Pays
        public function setPays($pays)
        {
            $this->pays = $pays;

            return $this;
        }
       
        public function __toString()
        {
            return $this->pays;
        }

        public function afficheEquipesParPays(){
            $result = "<h3>Equipes de $this</h3><br>";
            foreach($this->equipes as $equipe) {
                $result .= $equipe. "<br>";
            }
            return $result;
        }
    }
?>