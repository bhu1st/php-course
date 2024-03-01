<?php

	$filename = "sample.txt";
	
	$handle = fopen($filename, "rb");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    //echo nl2br($contents); //nl2br converts \n to <br> which is inside the file
	//uncomment echo to check output 	

?>