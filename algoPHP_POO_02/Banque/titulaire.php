<?php
    class Titulaire {

        // Propriétés
        private string $nom;
        private string $prenom;
        private string $genre;
        private DateTime $dateNaissance;
        private string $lieuResidence;
        private array $comptes;

        // Construteur
        public function __construct(string $nom, string $prenom, string $genre, string $dateNaissance, string $lieuResidence) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->genre = $genre;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->lieuResidence = $lieuResidence;
            $this->account = [];
        }

        // Set and get nom       
        public function getNom():string
        {
            return $this->nom;
        }       
        public function setNom($nom)
        {
            $this->nom = $nom;
            return $this;
        }

        // Set and get prenom       
        public function getPrenom():string
        {
            return $this->prenom;
        }        
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
            return $this;
        }

        // Set and get genre      
        public function getGenre():string
        {
            return $this->genre;
        }        
        
        public function setGenre($genre)
        {
            $this->genre = $genre;
            return $this;
        }

        // Set and get dateNaissance    
        public function getDateNaissance():string
        {
            return date_diff(new DateTime(), $this->dateNaissance)->format("%Y");
        }        
        public function setDateNaissance($dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
            return $this;
        }

        // Set and get lieuResidence     
        public function getLieuResidence():string
        {
            return $this->lieuResidence;
        }
    
        public function setLieuResidence($lieuResidence)
        {
            $this->lieuResidence = $lieuResidence;
            return $this;
        }

        // Methode afficherComptes
        public function afficherComptes() {
            $result = "<h1>Comptes de $this</h1>";
            foreach($this->comptes as $compte) {
                $result .= $compte;
            }
            return $result;
        }

        public function __toString() {
            return $this->prenom." ".$this->nom;
        }

        // Ajouter comptes
        public function ajouterCompte(Compte $comptes)
        {
            $this->comptes[] = $comptes;
        }
    }
?>

