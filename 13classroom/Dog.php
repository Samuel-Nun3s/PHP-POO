<?php 
    require_once 'Wolf.php';

    class Dog extends Wolf {
        public function makeSound() {
            echo "Som de cachorro ";
        }

        public function reactPhrase($phrase) {
            if ($phrase == "toma comida" || $phrase == "Olá") {
                echo "Abanar e latir";
            } else {
                echo "Rosnar";
            }
        }

        public function reactTime($time, $minute) {
            if ($time < 12) {
                echo "Abanar";
            } elseif ($time >= 18) {
                echo "Ignorar";
            } else {
               echo "Abanar e Latir"; 
            }
        }

        public function reactOwner($owner) {
            if ($owner) {
                echo "Abanar"; 
            } else {
                echo "Rosnar e Latir";
            }
        }

        public function reactAge($age, $weight) {
            if ($age < 5) {
                if ($weight < 10) {
                    echo "Abanar";
                } else {
                    echo "Latir";
                }
            } else {
                if ($weight < 10) {
                    echo "Rosnar";
                } else {
                    echo "Ignorar";
                }
            }
        }
    }
?>