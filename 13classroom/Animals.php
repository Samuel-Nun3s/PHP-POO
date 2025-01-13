<?php 
    abstract class Animals {
        protected $weight;
        protected $age;
        protected $members;

        public abstract function makeSound();

        // Construct

        // Getters
        public function getWeight() {
            return $this->weight;
        }

        public function getAge() {
            return $this->age;
        }

        public function getMembers() {
            return $this->members;
        }

        // Setters
        public function setWeight($w) {
            $this->weight = $w;
        }

        public function setAge($a) {
            $this->age = $a;
        }

        public function setMembers($m) {
            $this->members = $m;
        }
    }
?>