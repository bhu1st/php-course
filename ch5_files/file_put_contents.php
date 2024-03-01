<?php 

    $myarray[] = "This is line one";
    $myarray[] = "This is line two";
    $myarray[] = "This is line three";
    
	//implode joins array with "\n" as separator
	$mystring = implode("\n", $myarray);
	
	$filename = "testfile.txt";

    //returns number of bytes written into file
	//existing file will be re-written
	
	$numbytes = file_put_contents($filename, $mystring);
	
	 
	echo "$numbytes bytes written<br/>";
	
	//to append data to file we can pass third param FILE_APPEND 
	//uncomment below code and run the script again to see this in action
	//$numbytes = file_put_contents($filename, $mystring, FILE_APPEND);
	
   

?>