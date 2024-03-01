<?php
    
//pathinfo() takes a filename as its only parameter, and returns an array with three elements: dirname, basename, and //extension. 
	
	$fileinfo = pathinfo("sample.txt");	
    
	echo "<pre>";
	print_r($fileinfo);
	echo "</pre>";
	
?>