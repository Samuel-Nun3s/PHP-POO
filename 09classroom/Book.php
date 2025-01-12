<?php
    require_once 'Person.php'; 
    require_once 'Publication.php';

    class Book implements Publication {
        private $title;
        private $author;
        private $totalPages;
        private $currentPage;
        private $open;
        private $reader;

        public function details() {
            echo "Titulo: " . $this->getTitle() . "<br>";
            echo "Autor: " . $this->getAuthor() . "<br>";
            echo "Total de Paginas: " . $this->getTotalPages() . "<br>";
            echo "Pagina Atual: " . $this->getCurrentPage() . "<br>";
            echo "Aberto: " . $this->getOpen() . "<br>";
            echo "Leitor: ";
            echo $this->getReader()->getName();
        }

        // Interface
        public function open() {
            if (!$this->getOpen()) {
                $this->setOpen(true);
            } else {
                echo "O livro ja esta aberto!";
            }
        }

        public function close() {
            if ($this->getOpen()) {
                $this->setOpen(false);
            } else {
                echo "O livro ja esta fechado!";
            }
        }

        public function leafThrough($p) {
            if ($p > $this->getTotalPages()) {
                echo "Pagina inexistente!";
                $this->setCurrentPage(0);
            } else {
                $this->setCurrentPage($p);
            }
        }

        public function advancePage() {
            if ($this->getCurrentPage() < $this->getTotalPages()) {
                $this->setCurrentPage($this->getCurrentPage() + 1);
            } else {
                echo "O livro ja esta na ultima pagina!";
            }
        }

        public function returnPage() {
            if ($this->getCurrentPage() > 1) {
                $this->setCurrentPage($this->getCurrentPage() - 1);
            } else {
                echo "O livro esta na primeira pagina!";
            }
        }

        public function __construct($t, $a, $tP, $r) {
            $this->setTitle($t);
            $this->setAuthor($a);
            $this->setTotalPages($tP);
            $this->setCurrentPage(0);
            $this->setOpen(false);
            $this->setReader($r);
        }

        // Getters
        public function getTitle() {
            return $this->title;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function getTotalPages() {
            return $this->totalPages;
        }

        public function getCurrentPage() {
            return $this->currentPage;
        }

        public function getOpen() {
            return $this->open;
        }

        public function getReader() {
            return $this->reader;
        }

        // Setters

        public function setTitle($t) {
            $this->title = $t;
        }

        public function setAuthor($a) {
            $this->author = $a;
        }

        public function setTotalPages($t) {
            $this->totalPages = $t;
        }

        public function setCurrentPage($c) {
            $this->currentPage = $c;
        }

        public function setOpen($o) {
            $this->open = $o;
        }

        public function setReader($r) {
            $this->reader = $r;
        }
    }
?>