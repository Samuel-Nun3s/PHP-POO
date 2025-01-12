<?php
    require_once 'Controller.php';

    class RemoteControl implements Controller {
        // Atributes:
        private $volume;
        private $connected;
        private $playing;

        // Methods:
        // Especials:
        public function __construct() {
            $this->volume = 50;
            $this->connected = false;
            $this->playing = false;
        }

        // Interface:
        public function toConnect() {
            $this->setConnected(true);
        }

        public function toSwitchOff() {
            $this->setConnected(false);
        }

        public function openMenu() {
            echo "<p>-----MENU-----</p>";
            echo "<br>Está ligado?: " . ($this->getConnected()?"SIM":"NÃO");
            echo "<br>Está tocando?: " . ($this->getPlaying()?"SIM":"NÃO");
            echo "<br>Volume: " . $this->getVolume() . " ";
            for ($i = 0; $i < $this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
        }

        public function closeMenu() {
            echo "<br>Fechando Menu...";
        }

        public function moreVolume() {
            if ($this->getConnected()) {
                $this->setVolume($this->getVolume() + 10);
            } else {
                echo "<p>ERRO! Não posso aumentar o volume!</p>";
            }
        }

        public function lessVolume() {
            if ($this->getConnected()) {
                $this->setVolume($this->getVolume() - 10);
            } else {
                echo "<p>ERRO! Não posso diminuir o volume!</p>";
            }
        }

        public function turnOnMute() {
            if ($this->getConnected() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function turnOffMute() {
            if ($this->getConnected() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play() {
            if ($this->getConnected() && !$this->getPlaying()) {
                $this->setPlaying(true);
            }
        }

        public function pause() {
            if ($this->getConnected() && $this->getPlaying()) {
                $this->setPlaying(false);
            }
        }
        
        // Getters:
        private function getVolume() {
            return $this->volume;
        }

        private function getConnected() {
            return $this->connected;
        }

        private function getPlaying() {
            return $this->playing;
        }

        // Setters:
        private function setVolume($v) {
            $this->volume = $v;
        }

        private function setConnected($c) {
            $this->connected = $c;
        }

        private function setPlaying($p) {
            $this->playing = $p;
        }
    }
?>