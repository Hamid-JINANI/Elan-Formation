<?php
    class Director extends Person 
    {
        // Properties
        private array $movies;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender, string $birth) {
            parent::__construct($surName, $firstName, $gender, $birth);
            $this->movies = [];
        }

        // Method add movies
        public function addMovie(Movie $movie) {
            $this->movies[] = $movie;
        }

        public function displayMovies() {
            $result = "<h3>Films de $this</h3><br>";
            foreach ($this->movies as $movie) {
                $result .= $movie."<br>";
            }
            return $result;
        }
    }
?>