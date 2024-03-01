<?php
    class site {
        
		private $headers;
        private $footers;
        private $page;

        public function __construct() {
            $this->headers = array();
            $this->footers = array();
        }

        public function __destruct() {
            // clean up here
        }

        public function display() {
            foreach($this->headers as $header) {
                include $header;
            }

            $this->page->display();

            foreach($this->footers as $footer) {
                include $footer;
            }
        }

        public function addHeader($file) {
            $this->headers[] = $file;
        }

        public function addFooter($file) {
            $this->footers[] = $file;
        }

        public function setPage(page $page) {
            $this->page = $page;
        }
    }