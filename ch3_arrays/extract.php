<?php
    
	/*
	Converting an array to individual variables
	
	int extract ( array source [, int extract_type [, string prefix]])
	
	
	*/
	
	$bagmati = 'xyz';
    $capital['narayani'] = 'chitwan';
    $capital['kaski'] = 'pokhara';
    $capital['bagmati'] = 'kathmandu';
    
	extract($capital);
	// now all keys will turn into variable and key=>value's as variable values
	
    echo $bagmati."<br>"; // value defined above is override
	echo $kaski."<br>";	
	echo $narayani."<br>";
?>