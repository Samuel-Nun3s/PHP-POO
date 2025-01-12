<?php 
    require_once './superClass/Mammal.php';

    class Dog extends Mammal {
        public function buryBone() {
            echo "Enterrando Osso";
        }

        public function wagTail() {
            echo "Abanando o Rabo";
        }
    }
?>