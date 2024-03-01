<?php
    class programmer {
        
		//this magic method gets called when we try to use object as string
		
		public function __tostring() {
            return "Halo! i am a programmer<br/>";
        }
    }

    $daaju = new programmer;
    
	echo $daaju; //here $daaju object is treated as string
?>