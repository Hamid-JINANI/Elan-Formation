<?php
    class Genre 
    {
        // Properties
        private string $genre;

        // Constructor
        public function __construct(string $genre)
        {
        	$this->genre = $genre;
        }

        // Get and Set genre
        public function getgenre() {
           	return $this->genre;
        }
         public function setgenre($genre) {
           	$this->genre = $genre;
           	return $this;
        }

        // Method
        public function __toString() {
         	return "Genre : " .$this->genre. "<br>";
     	}
    }
?>
    