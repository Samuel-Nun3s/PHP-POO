<?php 
    class Caneta {
        var $model; // Modelo da caneta
        var $color; // Cor da caneta
        var $tip; // Tamanho da ponta
        var $load; // Carga de tinta da caneta
        var $covered; // Se a caneta esta tampada

        function scribble() {
            if ($this->covered == true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        function cover() {
            $this->covered = true;
        }

        function uncover() {
            $this->covered = false;
        }
        
    }
?>