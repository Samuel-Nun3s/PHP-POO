<?php 
    require_once 'Animal.php';

    class Bird extends Animal {
        private $featherColor;

        public function animalMove() {
            echo "Voando ";
        }

        public function toFeed() {
            echo "Comendo Frutas ";
        }

        public function makeSound() {
            echo "Som de ave ";
        }

        public function makeNest() {
            echo "Construiu um ninho ";
        }

        // Construct

        // Getters
        public function getFeatherColor() {
            return $this->featherColor;
        }

        // Setters
        public function setFeatherColor($f) {
            $this->featherColor = $f;
        }
    }
?>