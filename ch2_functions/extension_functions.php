<?php 

/*
Remembered : Extentions ?? - phpinfo(), php.ini ?? 

array get_loaded_extensions ( )
array get_extension_funcs ( string module_name)
int dl ( string module_name)
bool extension_loaded ( string name)

There are two functions that you will likely find useful for determining what extensions 
you have available to you, and these are get_loaded_extensions(), and get_extension_funcs().


The dl() function Dynamically Loads a PHP extension at runtime, 
which means you can enable a certain extension only for a certain script.

The downside to using dl() is that it needs to literally dynamically load and unload the 
extension each time your scripts run - this ends up being a great deal slower than 
running PHP as a web server module, where the extensions are loaded just once and kept in memory.

Using dl() with multi-threaded web servers will simply not work, 
and you will need to use the static method of editing your php.ini file and restarting the server.


get_loaded_extensions() takes no parameters, 
and returns an array of the names of all extensions you have loaded. 

get_extension_funcs() takes the name of an extension, 
and returns an array of the functions available inside that extension.

Using these two together it is easy to test whether you have an extension available to you, 
and, if so, that it contains the correct function. 

*/

	$extensions = get_loaded_extensions();

	echo "<pre>";
	print_r($extensions);
	echo "</pre>";
	
    foreach($extensions as $extension) {    
		echo $extension;
		$ex_funcs = get_extension_funcs($extension);
		if (!empty($ex_funcs)) {
		  
		  //echo ' (' . implode(', ', $ex_funcs) . ')';
		  
		  echo ' (', implode(', ', $ex_funcs), ')';
		  
		  //Note that the code uses echo rather than print 
		  //because it uses the comma operator to chain together things to output, 
		  //which is more efficient than using the concatenation operator
		  
		  echo "<br/><br/>";
		}
    }

?>