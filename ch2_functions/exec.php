<?php 
/*

string exec ( string command [, array output [, int return_var]])
//exec() runs the program then sends back the last line outputted from that program as its return value.

void passthru ( string command [, int return_var])
//runs the program specified and prints out all the output that program generates.

int virtual ( string filename)

*/

	echo "<pre>";
	
	echo exec("dir"); // just prints last line of output
	
	echo "<br/><br/><br/>";
	
    passthru("dir"); //prints everything
	
	echo "</pre>";
	

?>