<?php

class Auteur {

    // propriétés
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $livres;

    // constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->livres = [];
    }

    /**
     * Get the value of nom
     */ 
    public function getNom():string
    {
        return $this->nom;
    }
    
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    
    /**
     * Get the value of prenom
     */ 
    public function getPrenom():string
    {
        return $this->prenom;
    }
    
    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    
    /**
     * Get the value of sexe
     */ 
    public function getSexe():string
    {
        return $this->sexe;
    }
    
    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }
    
    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance():DateTime
    {
        return $this->dateNaissance;
    }
    
    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getAge():int
    {
        return date_diff(new DateTime(), $this->dateNaissance)->format("%Y");
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie() {
        $result = "Livres de $this<br><ul>";
        foreach ($this->livres as $livre) {
            $result .= "<li>$livre</li>";
        }
        $result .= "</ul>";
        $result .= $this->getTotalPriceBibliographie();
        return $result;
    }

    public function getTotalPriceBibliographie() {
        $result = 0;
        foreach ($this->livres as $livre) {
            $result += $livre->getPrix();
        }
        return "Total de la bibliographie de ".$this->prenom." ".$this->nom." : $result €";
    }

    public function __toString() {
        return "<strong>$this->prenom $this->nom</strong>"." (".$this->getAge()." ans)";
    }
}