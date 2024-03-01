<?php
	//run this program and understand the error
	class person {
        
		public $name;

		private function getName() {
            return $this->Name;
        }
    }

	class programmer extends person {
        
		public function greet() {
            
			//we cann't access parent class's private functions in children classes
			// we need to use protected modifier to do that. refer protected_modifier.php
			//$this->getName(); in line below will give error 
			
			echo "Hola! ". $this->getName();
        }
    }
    
	$daaju = new programmer;	
    
	//this line gives error
	$daaju->greet();
	
	
?>