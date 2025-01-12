<?php 
    require_once 'Animal.php';

    class Reptile extends Animal {
        private $scaleColor;

        public function animalMove() {
            echo "Rastejando "; 
        }

        public function toFeed() {
            echo "Comendo Vegetais ";
        }

        public function makeSound() {
            echo "Som de réptil ";
        }

        // Construct

        // Getters
        public function getScaleColor() {
            return $this->scaleColor;
        }

        // Setters
        public function setScaleColor($s) {
            $this->scaleColor = $s;
        }
    }
?>