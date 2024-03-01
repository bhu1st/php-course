<?php
    
	$filename = "copy.dat";
	$new_file = $filename . '.old';	
	
	//leaves the file in the source location as well as placing a new copy of the file into the destination.
	//in this case source and destination are same directory	
	
    copy($filename, $new_file);
	
	echo "file copied";
?>