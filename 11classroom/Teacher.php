<?php 
    require_once 'Person.php';

    class Teacher extends Person {
        private $specialty;
        private $salary;
        
        public function ReceiveRaise($r) {
            $this->setSalary($this->salary + $r);
        }

        // Constuct

        // Getters
        public function getSpecialty() {
            return $this->specialty;
        }

        public function getSalary() {
            return $this->salary;
        }

        // Setters
        public function setSpecialty($s) {
            $this->specialty = $s;
        }

        public function setSalary($s) {
            $this->salary = $s;
        }
    }
?>