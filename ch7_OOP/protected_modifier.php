<?php
    
		
	class person {
        
		public $name;
		
		//this function is now protected, i.e can be inherited
		protected function getName() {
            return $this->name;
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
	
	$daaju->name = "Daaju";		
    $daaju->greet();
	
	
?>