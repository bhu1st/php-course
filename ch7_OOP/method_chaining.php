<?php 

    class Person
    {
        private $name;
        private $surname;
        private $phone_arr = array();

        public function name($strName)
        {
            $this->name = $strName;
            return $this; // returns $this i.e Person 
        }

        public function surname($strSurname)
        {
            $this->surname = $strSurname;
            return $this; // returns $this i.e Person
        }

        public function phone() 
        {   $this->phone_arr = func_get_args(); //get arguments as array
            return $this; // returns $this i.e Person
        }

        public function __toString()
        {
            return $this->name." ".$this->surname." ".implode(" ",$this->phone_arr);
        }
    }

    $me = new Person;
    
	/*
	$me->name("Nepali");
	$me->surname("Daaju");
	$me->phone("+977", "1 47 85058");	
	echo $me;
	*/
	
	echo $me->name("Nepali")
	        ->surname("Daaju")
			->phone("+977", "1 47 85058");
			

?>