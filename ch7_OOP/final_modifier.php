<?php
    
	//run this program and understand the error
	//note the use of "final" access modifier keyword in newspecies class
	
	final class newspecies {        
		
		public $name;
		protected function getName() {
            return $this->name;
        }
    }

	class programmer extends newspecies {
        
		public function greet() {           
			
			echo "Hola! ". $this->getName();
        }
    }
    
	$daaju = new programmer;	
	$daaju->name = "Daaju";		
    $daaju->greet();
	
	
	
?>