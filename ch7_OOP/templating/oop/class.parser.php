<?php

//Source : http://www.devshed.com/c/a/PHP/Building-a-Template-Parser-Class-with-PHP-Part-I/4/

class parser {
    
    // member definition
 
    private $output;
 
    public function __construct($templateFile='default.html'){
 
    // constructor setting up class initialization
	(file_exists($templateFile)) ? $this->output = file_get_contents($templateFile): die('Error:Template file '.$templateFile.' not found');
	
    }
 
    function parseTemplate($tags=array()){
		  if(count($tags)>0){
			foreach($tags as $tag=>$data){
			  
			  $data=(file_exists($data))? $this->parseFile($data):$data;
			  
			  $this->output=str_replace('{'.$tag.'}',$data,$this->output);
			  }
		  }
		  else {
			   die('Error: No tags were provided for replacement');
		  }
	}
 
    function display(){
 
		//code for displaying the finished parsed page
		return $this->output;
    }
	
	function parseFile($file){
		ob_start(); //starts an output buffer
		include($file);
		$content=ob_get_contents(); // retrieves the file contents from the buffer
		ob_end_clean(); //clears up the buffer and returns the data
		return $content;
	}

 
}
?>