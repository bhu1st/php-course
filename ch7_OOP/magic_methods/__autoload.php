<?php
    
	//autoload magic method gets called (automatically) whenever we try to create object 
	//of a class which doesn't exist in context
	
	function __autoload($class) {
        print "no existing class name: $class!\n";
        include "myfile.php";
    }

    $daaju = new programmer;
    $daaju->greet();
?>