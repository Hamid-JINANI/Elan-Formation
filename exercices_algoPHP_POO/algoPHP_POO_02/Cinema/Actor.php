<?php
    class Actor extends Person 
    {
        // Properties
        private array $movies;
        private array $castings;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender, string $birth)
        {
            parent::__construct($surName, $firstName, $gender, $birth);
            $this->movies = [];
            $this->castings = [];
        }

        // method display infos actor
        public function displayInfosActor() {
            return "<h3>Infos actor</h3>
                <p>Surname : " . $this->surName . "</p>
                <p>First name : " . $this->firstName . "</p>";
        }
        
        // ajouter un casting dans le tableau des castings
        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
        }

        // Method display casting
        public function displayCasting() {
            $result = "<h3>Les rôles de $this</h3><br>";
            foreach($this->castings as $casting) {
                $result .= $casting->getActor(). " a joué dans " .$casting->getMovie()." comme " .$casting->getCharacter(). "<br>";
            }
            return $result;
        }
        
        // Method display infos casting
        public function displayInfosCasting() {
            return "<h4>Les acteurs : </h4>
                <p>" .$this->movie."</p>
                <p>" .$this->character."</p>
                <p>" .$this->actor."</p>";
        }
    }
?>