<?php 
    interface Publication {
        public function open();
        public function close();
        public function leafThrough($p);
        public function advancePage();
        public function returnPage();
    }
?>