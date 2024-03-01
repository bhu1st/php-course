<?php
    
    class person {
        
		public $name;        
		
		/*we use constructor to initialize object 
		variables at creation time */
        
		public function __construct() {            
            $this->name = $n;  
			echo "creating person <br/>";
        }

        public function greet() {
            echo "Hi!";
        }
        
		
		public function display_name(){
			echo "my name is $this->name<br/>";
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