<?php
    require_once 'Fighter.php';

    class Fight {
        // Atributes
        private $challenged;
        private $challenging;
        private $rounds;
        private $approved;

        // Methods
        // public function __construct() {
            
        // }

        public function scheduleFight($f1, $f2) {
            if ($f1->getCategory() == $f2->getCategory() && $f1 != $f2) {
                $this->setApproved(true);
                $this->setChallenged($f1);
                $this->setChallenging($f2);
            } else {
                $this->setApproved(false);
                $this->setChallenged(null);
                $this->setChallenging(null);
            }
        }

        public function toFight() {
            if ($this->getApproved()) {
                $this->challenged->toPresent();
                echo "<br>";
                $this->challenging->toPresent();
                echo "<br>";
                $winner = random_int(0, 2);
                switch ($winner) {
                    case 0: // Draw
                        echo "Empatou <br>";
                        $this->challenged->drawFight();
                        $this->challenging->drawFight();
                        break;
                    case 1: // won challenged
                        echo $this->challenged->getName() . " Venceu <br>";
                        $this->challenged->winFight();
                        $this->challenging->loseFight();
                        break;
                    case 2: // won challenging
                        echo $this->challenging->getName() . " Venceu <br>";
                        $this->challenged->loseFight();
                        $this->challenging->winFight();
                        break;
                }   
            } else {
                echo "A luta não pode acontecer <br>";
            }
        }

        public function getChallenged() {
            return $this->challenged;
        }

        public function getChallenging() {
            return $this->challenging;
        }

        public function getRounds() {
            return $this->rounds;
        }

        public function getApproved() {
            return $this->approved;
        }

        public function setChallenged($c) {
            $this->challenged = $c;
        }

        public function setChallenging($c) {
            $this->challenging = $c;
        }

        public function setRounds($r) {
            $this->rounds = $r;
        }

        public function setApproved($a) {
            $this->approved = $a;
        }
    }
?>