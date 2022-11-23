<?php
    class Compte 
    {
        private string $nomCompte;
        private float $soldeInitial;
        private string $devise;
        private Titulaire $titulaireCompte;
    
        // Constructeur
        public function __construct(string $nomCompte, float $soldeInitial, string $devise, Titulaire $titulaireCompte) 
        {        
            $this->nomCompte = $nomCompte;
            $this->soldeInitial = $soldeInitial;
            $this->devise = $devise;
            $this->titulaireCompte = $titulaireCompte;
            $this->titulaireCompte->ajouterCompte($this);
        }

        // Set and get nomCompte
        public function getNomCompte():string
        {
            return $this->nomCompte;
        }       
        public function setNomCompte($nomCompte)
        {
            $this->nomCompte = $nomCompte;
            return $this;
        }

        // Set and get soldeInitial
        public function getSoldeInitial():float
        {
            return $this->soldeInitial;
        }       
        public function setSoldeInitial($soldeInitial)
        {
            $this->soldeInitial = $soldeInitial;
            return $this;
        }

        // Set and get devise
        public function getDevise():string
        {
            return $this->devise;
        }       
        public function setDevise($devise)
        {
            $this->devise = $devise;
            return $this;
        }

        // Set and get titulaireCompte
        public function getTitulaireCompte():string
        {
            return $this->titulaireCompte;
        }       
        public function setTSitulaireCompte($titulaireCompte)
        {
            $this->titulaireCompte = $titulaireCompte;
            return $this;
        }
        
        // Méthode pour créditer un compte.
        public function crediter($montant) 
        {
            $this->soldeInitial += $montant ;
        }
        
        // Méthode pour débiter un compte.
        public function debiter($montant)
        {
            $this->soldeInitial -= $montant ;
        }

        // Méthode pour faire un virement.
        public function virement($montant, $compteCible)    // Montant à virer et compte à créditer en paramètres
        {
            $this->debiter($montant);                       // $this(soldeInitial)-> méthode crediter($montant).
            $compteCible->crediter($montant);               // $compteCible à créditer de $montant.
        }


        public function __toString() {
            return "".$this->nomCompte. " solde initial : " .$this->soldeInitial." ".$this->devise. " <br>";
        }
    }
?>