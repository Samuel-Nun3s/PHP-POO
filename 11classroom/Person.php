<?php 
    abstract class Person {
        private $name;
        private $age;
        private $sex;

        public final function haveBirthday() {
            $this->setAge($this->getAge() + 1);
        }

        // Contruct
        public function __construct() {
            
        }

        // Getters
        public function getName() {
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }

        public function getSex() {
            return $this->sex;
        }

        // Setters
        public function setName($n) {
            $this->name = $n;
        }

        public function setAge($a) {
            $this->age = $a;
        }

        public function setSex($s) {
            $this->sex = $s;
        }
    }
?>