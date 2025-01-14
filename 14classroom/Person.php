<?php 
    abstract class Person {
        protected $name;
        protected $age;
        protected $sex;
        protected $experience;

        protected function gainExperience($n) {
            $this->experience += $n;
        }

        public function __construct($nam, $ag, $se) {
            $this->name = $nam;
            $this->age = $ag;
            $this->sex = $se;
            $this->experience = 0;
        }
    }
?>