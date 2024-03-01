<?php
    
	//add MySQL connection code here

    class mytable {
        
		public $name;
	  //public $admin_email = 'eg@gmail.com';

        public function __construct($name) {
            $this->name = $name;
        }

        //called whenever an undefined class variable is set
		public function __set($var, $val) {
            //mysql_query("UPDATE {$this->name} SET $var = '$val';");
			echo $var . " ------ " . $val ."<br/><br/>";
        }

        
    }
    
	$user = new mytable("users");
    $user->admin_email = 'eg@gmail.com';
    $user->admin_addres = 'dadas';
	
	print_r($user);
?>