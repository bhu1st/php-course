<?php
    class person {
	
        public $first_name = "Nepali";
        public $middle_name = "Pd.";
        public $last_name = "Daaju";
        public $age = 24;
		
		public $password = "hola!";
		//private $password = "hola!";
        
        /* public function info() {
            foreach($this as $key => $value) {
                echo "$key is $value<br/>";
            }
        } */
		
		public function hello(){
			echo "hello";
		}
    }

    $daaju = new person();
	
	$bhai = array (
				'first_name' => 'Nepali',
				'middle_name' => 'Pd.',
				'last_name' => 'Bhai',
				'age' => 20,
				'password' => 'hello'
			);
		
	echo "<pre>";
	
		print_r($daaju); //object
		
		print_r($bhai);//array
		
	echo "</pre>";
	
	//difference between accessing object properties and array values
	echo $daaju->first_name." ". $daaju->last_name ."<br/>";	
	echo $bhai['first_name']." ". $bhai['last_name']."<br/>";
	
	echo "<br/>";
	
	//objects can be looped as array.
	
	foreach($daaju as $key => $value) {
           echo "$key is $value<br/>";
	}
	
    		
	
    //$daaju->info();
?>