<?php
    require_once 'ControllerF.php'; 

    class Fighter implements ControllerF {
        // Atributes:
        private $name;
        private $nationality;
        private $age, $height, $weight, $category;
        private $victories, $defeats, $draw; 

        // Methods:
        // Especials:
        public function __construct($nam, $nati, $ag, $heig, $weig, $vict, $defe, $dra) {
            $this->setName($nam);
            $this->setNationality($nati);
            $this->setAge($ag);
            $this->setHeight($heig);
            $this->setWeight($weig);
            $this->setVictories($vict);
            $this->setDefeats($defe);
            $this->setDraw($dra);
        }

        public function toPresent() {
            echo "Lutador: " . $this->getName();
            echo " Origem: " . $this->getNationality();
            echo " ". $this->getAge() . " anos ";
            echo $this->getHeight() . "m de altura ";
            echo "Pesando " . $this->getWeight() . "Kg ";
            echo "Ganhou: " . $this->getVictories();
            echo " Perdeu: " . $this->getDefeats();
            echo " Empatou: " . $this->getDraw();
        }

        public function status() {
            echo $this->getName() . " ";
            echo "É um peso " . $this->getCategory() . "! ";
            echo $this->getVictories() . " vitórias";
            echo " " . $this->getDefeats() . " derrotas";
            echo " " . $this->getDraw() . " empates <br>";
        }

        public function winFight() {
            $this->setVictories($this->getVictories() + 1);
        }

        public function loseFight() {
            $this->setDefeats($this->getDefeats() + 1);
        }

        public function drawFight() {
            $this->setDraw($this->getDraw() + 1);
        } 

        // Getters:
        public function getName() {
            return $this->name;
        }

        private function getNationality() {
            return $this->nationality;
        }

        private function getAge() {
            return $this->age;
        }

        private function getHeight() {
            return $this->height;
        }

        private function getWeight() {
            return $this->weight;
        }

        public function getCategory() {
            return $this->category;
        }

        private function getVictories() {
            return $this->victories;
        }

        private function getDefeats() {
            return $this->defeats;
        }

        private function getDraw() {
            return $this->draw;
        }

        // Setters:
        private function setName($n) {
            $this->name = $n;
        }

        private function setNationality($n) {
            $this->nationality = $n;
        }

        private function setAge($a) {
            $this->age = $a;
        }

        private function setHeight($h) {
            $this->height = $h;
        }

        private function setWeight($w) {
            $this->weight = $w;
            $this->setCategory();
        }

        private function setCategory() {
            if ($this->weight < 52.2) {
                $this->category = "Inválido";
            } elseif ($this->weight <= 70.3) {
                $this->category = "Leve";
            } elseif ($this->weight <= 83.9) {
                $this->category = "Média";
            } elseif ($this->weight <= 120.2) {
                $this->category = "Pesado";
            } else {
                $this->category = "Inválido";
            }
        }

        private function setVictories($v) {
            $this->victories = $v;
        }

        private function setDefeats($d) {
            $this->defeats = $d;
        }

        private function setDraw($d) {
            $this->draw = $d;
        }
    }
?>