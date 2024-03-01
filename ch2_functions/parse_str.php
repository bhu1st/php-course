<?php 

/*
void parse_str ( string input [, array store])
*/


	if (isset($data)) {
        print "data is $data<br />";
    } else {
        print "data is unset<br />";
    }

    parse_str("data=sample&username=xyz");	
	//variables parsed using parse_str() are now converted to global variables
	//can be accessed as $data, $username
	
    if (isset($data)) {
        print "data is $data<br />";
    } else {
        print "data is unset<br />";
    }
	
	
	
	echo "<br/>";
	echo "pass an array as the second parameter to parse_str(), and it will put the variables into there";
	echo "<br/>";
	
	$array = array();

	parse_str("data=sample&username=xyz", $array);
	
    echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	if (isset($array['data'])) {
        print "data is {$array['data']}<br />";
    } else {
        print "data is unset<br />";
    }

    

	
	
  	
	

?>