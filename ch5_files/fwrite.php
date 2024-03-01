<?php
    
	$filename = "fwritetest.txt";
	$data = "this data will be written to file";
	
	//first open file to write	
	$file_handle = fopen($filename, "wb");	//write binary safe mode
	
	//now write to file using file handle, returns number of bytes written.
    $numbytes = fwrite($file_handle, $data);
	
    //finally after writing is complete, close the file by closing its handle.
	fclose($file_handle);
	
    echo "$numbytes bytes written<br/>";
?>