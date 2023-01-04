<?php
    class Person 
    {
        // Properties
        protected string $surName;
        protected string $firstName;
        protected string $gender;
        protected DateTime $birth;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender, string $birth) 
        {
            $this->surName = $surName;
            $this->firstName = $firstName;
            $this->gender = $gender;
            $this->birth = new DateTime($birth);
        }

        // Get and Set surName
        public function getSurName() {
            return $this->surName;
        }
        public function setSurName($surName) {
            $this->surName = $surName;
            return $this;
        }
        
        // Get and Set firstName
        public function getFirstName() {
            return $this->firstName;
        }
        public function setFirstName($firstName) {
            $this->firstName;
            return $this;
        }

        // Get and Set gender
        public function getGender() {
            return $this->gender;
        }
        public function setGender($gender) {
            $this->gender;
            return $this;
        }
        
        // Get and Set birth
        public function getBirth():DateTime {
            return $this->birth;
        }
        public function setBirth($birth) {
            $this->birth;
            return $this;
        }

        // Method display age
        public function getAge() {
            return date_diff(new DateTime(), $this->birth)->format("%Y"); // différence(dateActuelle, dateNaissance)->formatée(années).
        }

        public function __toString() {
            return $this->surName. " " .$this->firstName;
        }

        // method display infos director
        public function displayInfosPerson() {
            return "<h4>Infos person : </h4>
                <p>Surname : " . $this->surName . "</p>
                <p>First name : " . $this->firstName . "</p>
                <p>Age : " . $this->getAge() . " ans.</p>";
        }
    }
