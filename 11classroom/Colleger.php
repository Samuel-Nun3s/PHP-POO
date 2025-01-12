<?php 
    require_once 'Student.php';

    class Colleger extends Student {
        private $scholarship;

        public function renewScholarship() {
            echo "Bolsa renovada <br>";
        }

        public function payMonthlyFee() {
            echo $this->getName() . " é Bolsista! Então paga com desconto!";
        }

        // Contruct

        // Getters
        public function getScholarship() {
            return $this->scholarship;
        }

        // Setters
        public function setScholarship($s) {
            $this->scholarship = $s;
        }
    }
?>