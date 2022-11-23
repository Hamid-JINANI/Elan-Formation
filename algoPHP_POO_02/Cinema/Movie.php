<?php
    class Movie
    {
        // Properties
        private string $title;
        private Director $director;
        private DateTime $frenchRelease;
        private int $duration;
        private string $filmGenre;
        private string $synopsis;

        // Constructor
        public function __construct(string $title, Director $director, DateTime $frenchRelease, int $duration, string $filmGenre, string $synopsis)
        {
            $this->title = $title;
            $this->director = $director;
            $this->frenchRelease = $frenchRelease;
            $this->synopsis = $filmGenre;
            $this->duration = $duration;
            $this->director->addMovie($this);
        }

        // Get and Set title
        public function getTitle() {
            return $this->title;
        }
        public function setTitle() {
            return $this->title;
        }

        // Get and Set director
        public function getDirector() {
            return $this->director;
        }
        public function setDirector() {
            return $this->director;
        }


        // Get and Set frenchRelease
        public function getFrenchRelease() {
            return $this->frenchRelease;
        }
        public function setFrenchRelease() {
            return $this->frenchRelease;
        }

        // Get and Set duration
        public function getDuration() {
            return $this->duration;
        }
        public function setDuration() {
            return $this->duration;
        }

        // Get and Set filmGenre
        public function getFilmGenre() {
            return $this->filmGenre;
        }
        public function setFilmGenre() {
            return $this->filmGenre;
        }

        // Get and Set synopsis
        public function getSynopsis() {
            return $this->synopsis;
        }
        public function setSynopsis() {
            return $this->synopsis;
        }
        // Method
        public function __toString() {
            return "" .$this->title. " <br>
                Réalisateur : " .$this->director. "<br>
                Date de sortie en France : " .$this->frenchRelease. "<br>
                Durée : " .$this->duration. "<br>
                Genre : " .$this->filmGenre. "<br>
                Résumé : " .$this->synopsis. "";
        }
    }
?>