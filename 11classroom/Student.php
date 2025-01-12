<?php 
    require_once 'Person.php';

    class Student extends Person {
        private $registration;
        private $course;

        public function payMonthlyFee() {
            echo "Pagando mensalidade do aluno " . $this->getName() . "<br>";
        }

        // Construct
        public function __construct() {
            
        }

        // Getters
        public function getRegistration() {
            return $this->registration;
        }

        public function getCourse() {
            return $this->course;
        }

        // Setters
        public function setRegistration($r) {
            $this->registration = $r;
        }

        public function setCourse($c) {
            $this->course = $c;
        }
    }
?>