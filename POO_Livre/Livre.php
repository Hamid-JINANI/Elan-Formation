<?php

class Livre
{
    // propriétés
    private string $titre;
    private int $anneeSortie;
    private int $nbPages;
    private float $prix;
    private Auteur $auteur;

    // constructeur
    public function __construct(string $titre, int $anneeSortie, int $nbPages, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->anneeSortie = $anneeSortie;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajouterLivre($this);
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre():string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get the value of anneeSortie
     */ 
    public function getAnneeSortie():int
    {
        return $this->anneeSortie;
    }

    /**
     * Set the value of anneeSortie
     *
     * @return  self
     */ 
    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;
        return $this;
    }

    /**
     * Get the value of nbPages
     */ 
    public function getNbPages():int
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     *
     * @return  self
     */ 
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;
        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix():float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur():Auteur
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    public function __toString() {
        return "<strong>$this->titre</strong> ($this->anneeSortie) / $this->nbPages pages - $this->prix €";
    }
}
