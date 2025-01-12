<?php 
    class Caneta {
        private $model; // Modelo da caneta
        private $color; // Cor da caneta
        private $tip; // Tamanho da ponta
        private $covered; // Se a caneta esta tampada ou nao
        
        // Methods:
        // Constructor:
        public function __construct($m, $c, $p) { // Método construtor    
            $this->model = $m;
            $this->color = $c;
            $this->tip = $p;
            $this->cover();
        }

        // Getters:
        public function getModel() {
            return $this->model;
        }

        public function getTip() {
            return $this->tip;
        }

        // Setters:
        public function setModel($m) {
            $this->model = $m;
        }

        public function setTip($t) {
            $this->tip = $t;
        }

        public function cover() {
            $this->covered = true;
        }
    }
?>
