<?php 
    require_once 'Animals.php';

    class Mammal extends Animals {
        protected $furColor;

        public function makeSound() {
            echo "Som de mamifero ";
        }

        // Construct

        // Getters
        public function getFurColor() {
            return $this->furColor;
        }

        // Setters
        public function setFurColor($f) {
            $this->furColor = $f;
        }
    }
?>