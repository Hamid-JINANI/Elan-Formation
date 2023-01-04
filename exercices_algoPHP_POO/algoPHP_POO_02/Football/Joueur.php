<?php
    class Joueur
    {
        // Properties
        private string $nom;
        private string $prenom;
        private DateTime $dateNaissance;
        private string $genre;
        private string $lieuNaissance;
        private Pays $nationalite;
        private array $carrieres;

        // Constructor
        public function __construct(string $nom, string $prenom, string $dateNaissance, string $genre, string $lieuNaissance, Pays $nationalite)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->genre = $genre;
            $this->lieuNaissance = $lieuNaissance;
            $this->nationalite = $nationalite;
            $this->carrieres = [];
        }

        // Get and Set nom
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        // Get and Set prenom
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        // Get and Set dateNaissance
        public function getDateNaissance(): DateTime
        {
            return $this->dateNaissance;
        }
        public function setDateNaissance($dateNaissance)
        {
            $this->dateNaissance;
            return $this;
        }

        // Get and Set genre
        public function getGenre()
        {
            return $this->genre;
        }
        public function setGenre($genre)
        {
            $this->genre = $genre;
        }

        // Get and Set lieuNaissance
        public function getLieuNaissance()
        {
            return $this->lieuNaissance;
        }
        public function setLieuNaissance($lieuNaissance)
        {
            $this->lieuNaissance = $lieuNaissance;
        }

        // Get and Set nationalite
        public function getNationalite()
        {
            return $this->nationalite;
        }
        public function setNationalite($nationalite)
        {
            $this->nationalite = $nationalite;
        }

        // Methode calcul age
        public function getAge()
        {
            return date_diff(new DateTime(), $this->dateNaissance)->format("%Y"); // différence(dateActuelle, dateNaissance)->formatée(années)
        }

        // Ajouter carrière
        public function addCarriere(Carriere $carrieres) {
            $this->carrieres[] = $carrieres;
        }

        // Affiche la carrière du joueur
        public function afficheCarriere() {
            $result = "<h3>Carrière de $this</h3>";
            foreach($this->carrieres as $carriere) {
                $result .= $carriere->getEquipe() . "";
            }
        }

        public function __toString()
        {   // Methode pour afficher les informations en lettres       
            return $this->nom . "<br>" . $this->prenom . "<br>" . $this->getAge() . "<br>" . $this->genre . "<br>" . $this->lieuNaissance . "<br>" . $this->nationalite . "<br>";
        }
    }
?>