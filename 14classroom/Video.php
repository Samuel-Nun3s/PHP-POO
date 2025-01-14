<?php 
    require_once 'ActionVideos.php';

    class Video implements ActionVideos {
        private $title;
        private $assessment;
        private $views;
        private $likes;
        private $reproducing;

        public function play() {
            $this->setReproducing(true);
        }

        public function pause() {
            $this->setReproducing(false);
        }

        public function like() {
            $this->setLikes($this->getLikes() + 1);
        }

        // Construct
        public function __construct($title) {
            $this->setTitle($title);
            $this->setAssessment(1);
            $this->setViews(0);
            $this->setLikes(0);
            $this->setReproducing(false);
        }

        // Getters
        public function getTitle() {
            return $this->title;
        }

        public function getAssessment() {
            return $this->assessment;
        }

        public function getViews() {
            return $this->views;
        }

        public function getLikes() {
            return $this->likes;
        }

        public function getReproducing() {
            return $this->reproducing;
        }

        // Setters
        public function setTitle($t) {
            $this->title = $t;
        }

        public function setAssessment($a) {
            $average = ($this->assessment + $a) / $this->views;
            $this->assessment = $average;  
        }

        public function setViews($v) {
            $this->views = $v;
        }

        public function setLikes($l) {
            $this->likes = $l;
        }

        public function setReproducing($r) {
            $this->reproducing = $r;
        }

    }
?>