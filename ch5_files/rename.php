<?php
    
	//Moving files with rename()
	
	$filename = "rename.dat";
	$new_file = $filename . '.old';	
    
	//renaming a file is essentially the same as moving it, so you use the move (mv) command in linux 
	//it is the same in PHP
	
	rename($filename, $new_file);
?>