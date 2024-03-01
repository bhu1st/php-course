<?php 

	$array["a"] = "Foo";
    $array["b"] = "Bar";
    $array["c"] = "Baz";
    $array["d"] = "Wom";
	
	echo "<pre>";
	print_r($array);

    //converts an array, given as its only parameter, 
	//into a normal string that you can save in a file, pass in a URL, etc.	
	
	$str = serialize($array);
	
	//convert the string into a version that is safe to be passed across the web. 
	
    $strenc = urlencode($str);
	
    echo $str . "<br/>";
    echo $strenc . "<br/>";
	
	$arr = unserialize(urldecode($strenc));    
	print_r($arr);

?>