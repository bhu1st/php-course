<?php
    class page {
        private $title;
        private $content;

        public function __construct($title) {
            $this->title = $title;
        }

        public function __destruct() {
            // clean up here
        }

        public function display() {
            echo "<h1>{$this->title}</h2>";
            echo $this->content;
        }

        public function setContent($content) {
            $this->content = $content;
        }
    }
?>