<?php
    /*
		Filtering array through a function
		
		array array_filter ( array input [, callback function])
		
		returns array
		filters array with callback function
	*/
	
	function endswitha($value) {
        return (substr($value, -1) == 'a');
    }

    $people = array("Ram", "Shyam", "Hari", "Gita", "Sita", "Rita");
    $witha = array_filter($people, "endswitha");
    echo "<pre>";
	print_r($witha);
?>