<?php 
    require_once 'Person.php';

    class Employee extends Person {
        private $sector;
        private $working;

        public function changeJob() {
            $this->setWorking(!$this->getWorking()); 
        }

        // Contructor 
        public function __construct($sect, $work) {
            $this->setSector($sect);
            $this->setWorking($work);
        }

        // Getters
        public function getSector() {
            return $this->sector;
        }

        public function getWorking() {
            return $this->working;
        }

        // Setters
        public function setSector($s) {
            $this->sector = $s;
        }

        public function setWorking($w) {
            $this-> working = $w;
        }
    }
?>