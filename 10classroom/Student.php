<?php
    require_once 'Person.php';

    class Student extends Person {
        private $registration;
        private $course;

        public function cancelRegistration() {
            $this->setRegistration(false);
        }

        // Contructor
        public function __construct($regis, $cour) {
            $this->setRegistration($regis);
            $this->setCourse($cour);
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