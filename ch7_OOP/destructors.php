<?php
    
    class person {
        public $name;        

        public function greet() {
            echo "Hi!";
        }
        
		//we use constructor to initialize object variables at creation time
        public function __construct($name) {            
            $this->name = $name;  
			echo "creating person <br/>";
        }
		
		public function display_name(){
			echo "my name is $this->name<br/>";
		}
		
		public function __destruct() {
			print "$this->name is no more here...<br/>";
		}
    }
    
    class programmer extends person {
        
		public function greet() {
            echo "hola!";
        }
    }
    
	//passing values to constructor while creating new object of the class programmer
    $daaju = new programmer("daaju");
    $daaju->display_name();
?>