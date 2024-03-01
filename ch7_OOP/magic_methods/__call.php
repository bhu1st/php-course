<?php
    class person {
        
		public $name;

        public function greet() {
            print "Hi!\n";
        }

        /*
		public function fly() {
            echo "What!";
        }
		*/

		//this magic method gets called when we try to call non existing function in class definition
        public function __call($function, $args) {
            $args = implode(', ', $args);
            echo "There is no such function : $function(); your call with arguments '$args' failed!<br/>";
        }
    }

    $daaju = new person;
    $daaju->fly("10", "20", "30");
?>