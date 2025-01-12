<?php 
    require_once 'Animal.php';

    class Mammal extends Animal {
        private $furColor;

        public function animalMove() {
            echo "Correndo ";
        }

        public function toFeed() {
            echo "Mamando ";
        }

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