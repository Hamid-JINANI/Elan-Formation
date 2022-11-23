<?php
    class Genre {
        // Properties
        private string $action;
        private string $adventure;
        private string $comedy;
        private string $documentaty;
        private string $drama;
        private string $fantasy;
        private string $history;
        private string $horror;
        private string $musical;
        private string $mystery;
        private string $romance;
        private string $scienceFiction;
        private string $sport;
        private string $thriller;
        private string $western;

        // Constructor
        public function __construct(string $action, string $adventure, string $comedy, string $documentaty, string $drama, string $fantasy, string $history, string $horror, string $musical, string $mystery, string $romance, string $scienceFiction, string $sport, string $thriller, string $western)
        {
        $this->action = $action;
        $this->adventure = $adventure;
        $this->comedy = $comedy;
        $this->documentaty = $documentaty;
        $this->drama = $drama;
        $this->fantasy = $fantasy;
        $this->history = $history;
        $this->horror = $horror;
        $this->musical = $musical;
        $this->mystery = $mystery;
        $this->romance = $romance;
        $this->scienceFiction = $scienceFiction;
        $this->sport = $sport;
        $this->thriller = $thriller;
        $this->western = $western;
        }

        // Get and Set action
        public function getAction() {
           return $this->action;
        }
         public function setAction($action) {
           $this->action = $action;
           return $this;
        }

        // Get and Set adventure
        public function getAdventure() {
           return $this->adventure;
        }
         public function setAdventure($adventure) {
           $this->adventure = $adventure;
           return $this;
        }

        // Get and Set comedy
        public function getComedy() {
           return $this->comedy;
        }
         public function setComedy($comedy) {
           $this->comedy = $comedy;
           return $this;
        }

        // Get and Set documentaty
        public function getDocumentaty() {
           return $this->documentaty;
        }
         public function setDocumentaty($documentaty) {
           $this->documentaty = $documentaty;
           return $this;
        }

        // Get and Set drama
        public function getDrama() {
           return $this->drama;
        }
         public function setDrama($drama) {
           $this->drama = $drama;
           return $this;
        }

        // Get and Set fantasy
        public function getFantasy() {
           return $this->fantasy;
        }
         public function setFantasy($fantasy) {
           $this->fantasy = $fantasy;
           return $this;
        }

        // Get and Set history
        public function getHistory() {
           return $this->history;
        }
         public function setHistory($history) {
           $this->history = $history;
           return $this;
        }

        // Get and Set horror
        public function getHorror() {
           return $this->horror;
        }
         public function setHorror($horror) {
           $this->horror = $horror;
           return $this;
        }

        // Get and Set musical
        public function getMusical() {
           return $this->musical;
        }
         public function setMusical($musical) {
           $this->musical = $musical;
           return $this;
        }

        // Get and Set mystery
        public function getMystery() {
           return $this->mystery;
        }
         public function setMystery($mystery) {
           $this->mystery = $mystery;
           return $this;
        }

        // Get and Set romance
        public function getRomance() {
           return $this->romance;
        }
         public function setRomance($romance) {
           $this->romance = $romance;
           return $this;
        }

        // Get and Set scienceFiction
        public function getScienceFiction() {
           return $this->scienceFiction;
        }
         public function setScienceFiction($scienceFiction) {
           $this->scienceFiction = $scienceFiction;
           return $this;
        }

        // Get and Set sport
        public function getSport() {
           return $this->sport;
        }
         public function setSport($sport) {
           $this->sport = $sport;
           return $this;
        }

        // Get and Set thriller
        public function getThriller() {
           return $this->thriller;
        }
         public function setThriller($thriller) {
           $this->thriller = $thriller;
           return $this;
        }

        // Get and Set western
        public function getWestern() {
           return $this->western;
        }
         public function setWestern($western) {
           $this->western = $western;
           return $this;
        }
    }
?>
    