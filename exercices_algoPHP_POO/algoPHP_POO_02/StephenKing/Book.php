<!--
    algoPHP_POO_02_class_books.php
    =============================================
    By AHJ
-->

<?php
    class Book {
        private string $title;
        private int $publicationDate;
        private int $pagesQuant;
        private float $price;
        private Author $author;

        // Constructor
        public function __construct(string $title, int $publicationDate, int $pagesQuant, float $price, Author $author) {
            $this->title = $title;
            $this->publicationDate = $publicationDate;
            $this->pagesQuant = $pagesQuant;
            $this->price = $price;
            $this->author = $author;
            $this->author->addBook($this);
        }

        // Setters
        public function setTitle() {
            return $this->title;
        }
        public function setPublicationDate() {
            return $this->publicationDate;
        }
        public function setPagesQuant() {
            return $this->pagesQuant;
        }  
        public function setPrice() {
            return $this->price;
        }  

        // Getters
        public function getTitle() {
            return $this->title;
        }        
        public function getPublicationDate() {
            return $this->publicationDate;
        }         
        public function getPagesQuant() {
            return $this->pagesQuant;
        }         
        public function getPrice() {
            return $this->price;
        }
    
        // Methode
        public function __toString() {
            return "" .$this->title. " (" .$this->publicationDate. ") : " .$this->pagesQuant. " pages / " .$this->price. " €<br>";
        }
    }
?>