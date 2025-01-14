<?php 
    require_once 'Video.php';
    require_once 'Grasshopper.php';

    class Preview {
        private $viewer;
        private $movie;

        public function toAssess() {
            $this->movie->setAssessment(5);
        }

        public function toAssessNote($note) {
            $this->movie->setAssessment($note);
        }

        public function toAssessPercentage($perce) {
            $new = 0;

            if ($perce <= 20) {
                $new = 3;
            } elseif ($perce <= 50) {
                $new = 5;
            } elseif ($perce <= 90) {
                $new = 8;
            } else {
                $new = 10;
            }

            $this->movie->setAssessment($new);
        }

        // Construct:
        public function __construct($viwe, $movi) {
            $this->viewer = $viwe;
            $this->movie = $movi;
            $this->viewer->setTotalWatched($this->viewer->getTotalWatched() + 1);
            $this->movie->setViews($this->movie->getViews() + 1);
        }

        // Getters:
        public function getViewer() {
            return $this->viewer;
        }

        public function getMovie() {
            return $this->movie;
        }

        // Setters:
        public function setViewer($v) {
            $this->viewer = $v;
        }

        public function setMovie($m) {
            $this->movie = $m;
        }
    }
?>