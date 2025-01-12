<?php 
    class Caneta {
        public $model; // Modelo da caneta
        public $color; // Cor da caneta
        private $tip; // Tamanho da ponta
        protected $load; // Carga de tinta da caneta
        protected $covered; // Se a caneta esta tampada

        public function scribble() {
            if ($this->covered == true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        private function cover() {
            $this->covered = true;
        }

        private function uncover() {
            $this->covered = false;
        }
        
    }
?>