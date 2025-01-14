<?php 
    require_once 'Person.php';

    class Grasshopper extends Person {
        private $login;
        private $totalWatched;

        public function sawOneMore() {
            $this->setTotalWatched($this->getTotalWatched() + 1);
        }

        // Construct
        public function __construct($nam, $ag, $se, $logi) {
            parent::__construct($nam, $ag, $se);
            $this->login = $logi;
            $this->totalWatched = 0;
        }

        // Getters
        public function getLogin() {
            return $this->login;
        }

        public function getTotalWatched() {
            return $this->totalWatched;
        }

        // Setters
        public function setLogin($l) {
            $this->login = $l;
        }

        public function setTotalWatched($t) {
            $this->totalWatched = $t;
        }
    }
?>