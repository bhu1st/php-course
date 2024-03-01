<?php
    /*
		bool in_array ( mixed needle, array haystack [, bool strict])
		
		Check whether an element exists in an array
	
	*/
	
	$name = "shyam";
    $name_array = array("hari", "shyam", "sita", "ram");
	
	echo "<pre>";
	print_r($name_array);
	echo "</pre>";
	
    if (in_array($name, $name_array)) {
        print "$name is in the array<br/>";
    } else {
        print "$name is not in the array<br/>";
    }
	
	$name = "Shyam";
	if (in_array($name, $name_array)) {
        print "$name is in the array<br/>";
    } else {
        print "$name is not in the array<br/>";
    }
?>