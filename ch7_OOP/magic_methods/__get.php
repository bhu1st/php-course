<?php
    class person {
        public $name;        
        //public $weight;

        //called when undefined class variable is read from script
		public function __get($var) {
            echo "attempt to retrieve $var which doesn't exists <br/>";
        }
    }

    $daaju = new person;	
	echo $daaju->weight;
?>