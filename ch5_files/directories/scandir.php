<?php
    
//scandir returns an array of all files and directories in the directory you specify in its param
	
	//$files = scandir(".", 1); // sort desc    
	
	//current directory
	$files = scandir("."); //sort asc
    
	echo "<pre>";
	print_r($files);
	echo "</pre>";
	
	
	//parent directory
	$files = scandir(".."); //sort asc
    
	echo "<pre>";
	print_r($files);
	echo "</pre>";
	
?>