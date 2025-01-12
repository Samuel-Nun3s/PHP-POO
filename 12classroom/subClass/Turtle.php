<?php 
    require_once './superClass/Reptile.php';

    class Turtle extends Reptile {
        public function animalMove() {
            echo "Andando bem devagar";
        }
    }
?>