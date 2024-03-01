<?php
    
    $filename = 'counter.txt'; // our counter file	
    	
	$fp = fopen( $filename,"r"); // open it for READING ("r")
	
    $counter = fread($fp, filesize($filename)); // read in value
    fclose( $fp ); // close it whilst we work

    ++$counter; // increase the counter by one
    echo "$counter hits to this page"; // display new value

    $fp = fopen( $filename,"w"); // open it for WRITING ("w")
    fwrite( $fp, $counter); // write in the new value
    fclose( $fp ); // close it
?>