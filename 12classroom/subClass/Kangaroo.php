<?php 
    require_once './superClass/Mammal.php';

    class Kangaroo extends Mammal {
        public function useBag() {
            echo "Usando bolsa";
        }

        public function animalMove() {
            echo "Saltando";
        }
    }
?>