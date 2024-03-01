<?php
    
    class person {
        public $name;        

        public function __construct($n) {            
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
        
		public function __construct($n) {
				
				echo "creating programmer <br/>";
				
				parent::__construct($n); 
				
				//uncomment this line and run the script again
				
/*
the "parent" part means "get the parent of this object,and use it", and the __construct() part means "call the construct function". so the whole line means "get the parent of this object then call its constructor". 
*/
		}
		public function greet() {
            echo "hola!";
        }
    }
    
    $daaju = new programmer("daaju");
    echo $daaju->display_name();
?>