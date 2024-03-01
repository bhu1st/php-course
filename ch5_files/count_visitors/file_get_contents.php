<?php
    
    $filename = 'counter.txt'; // our counter file	    	
	$counter = file_get_contents($filename);   //read content of the file
    ++$counter; // increase the counter by one
    echo "$counter hits to this page"; // display new value
    file_put_contents($filename, $counter); // write count to the file
    
?>