<?php 
    require_once 'Animal.php';

    class Fish extends Animal {
        private $scaleColor;

        public function animalMove() {
            echo "Nadando ";
        }
        
        public function toFeed() {
            echo "Comendo substâncias ";
        }
        
        public function makeSound() {
            echo "Peixe não faz som ";
        }
        
        public function releaseBubble() {
            echo "Soltou uma bolha ";
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