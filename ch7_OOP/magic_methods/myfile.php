<?php
    //base class person
	class person {
        
		//properties
		public $name;

        //functions/methods
		public function greet() {
            echo "Hi";
        }
    }

	//programmer is a person let's inherit 
    class programmer extends person {
        
		/* function overriding - why ? coz - programmer have 
		their own way to greet ! */
		public function greet() {
            echo "Howdy!";
        }
    }

    
	//object instance
	$daaju = new programmer;
	
	
	
	//set name property
    $daaju->name = "Nepali Daaju";	
    
	//display name
	echo $daaju->name;
	echo "<br/>";
	$daaju->greet();
	
?>