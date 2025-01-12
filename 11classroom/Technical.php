<?php 
    require_once 'Student.php';

    class Technical extends Student {
        private $professionalRegistration;

        public function toPractice() {

        }

        // Construct

        // Getters 
        public function getProfessionalRegistration() {
            return $this->professionalRegistration;
        }

        // Setters
        public function setProfessionalRegistration($p) {
            $this->professionalRegistration = $p;
        }
    }
?>