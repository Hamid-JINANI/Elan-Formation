<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<?php  
    class Author {
        private string $surName;
        private string $firstName;
        private string $gender;
        private DateTime $birth;
        private array $books;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender,  string $birth) {
            $this->surName = $surName;
            $this->firstName = $firstName;
            $this->gender = $gender;
            $this->birth = new DateTime($birth);
            $this->books = [];
        }

        // Getters and Setters

        /** Get value of surName */
        public function getSurName():string {
            return $this->surName;
        }
     
        public function setSurName($surName) {
            $this->surName = $surName;
            return $this;
        }

        /** Get value of firstName */
        public function getFirstName():string {
            return $this->firstName;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
            return $this;
        }

        /** Get value of gender */
        public function getGender():string {
            return $this->gender;
        }


        public function setGender($gender) {
            $this->gender = $gender;
            return $this;
        }

        /** Get the value of birth */
        public function getBirth($birth):DateTime {            
            return $this->$birth;
        } 

        public function setBirth($birth) {
            $this->birth = $birth;
            return $this;
        }

        public function getBooks() {
            return $this->books;
        }
        public function setBooks($books) {
            $this->books = $books;
            return $this;
        }

        /** Method display age */
        public function getAge() {
            return date_diff(new DateTime(), $this->birth)->format("%Y");
        }
        
        public function addBook(Book $book) {
            $this->books[] = $book;
        }

        /** Method display books */
        public function displayBooks() {
            $result = "Book of : $this<br><ul>";  // $this contient ce qu'il a dans la fonc. __toString().
            foreach($this->books as $book) {
                $result .= "<li>$book</li>";  // .= Fait une concaténation (automatique).
            }
            $result .= "<ul>";
            return $result;
        }  
        
        public function __toString() {
            return $this->surName." ".$this->firstName;
        }

        public function afficherInfos() {           
            return "
                <div>
                    <p>Surname : " .$this->surName. "</p>
                    <p>First name : " .$this->firstName. "</p>
                    <p>Age : " .$this->getAge(). " ans.</p>
                </div>";
        }       
    }
?>