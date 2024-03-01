<?php

/*

To Get the filename part of a path, you can use the basename() function. 

This takes a path as its first parameter, and, optionally, an extension as its second parameter.

The return value from the function is the name of the file without the directory information. 
If the filename has the same extension as the one you specified in parameter two, the extension is taken off also.

*/

	$filename = basename("/htdocs/somefile.txt");
	echo "$filename<br/>";
    $filename = basename("/htdocs/class/somefile.txt", ".php");
	echo "$filename<br/>";
    $filename = basename("/htdocs/test/somefile.txt", ".txt");
	echo "$filename<br/>";
	
?>