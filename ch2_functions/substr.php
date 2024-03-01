<?php
    
	//prototype : string substr ( string source, int start [, int length])
	
	echo substr("Hello world!", 1)."<br/>";
	echo substr("Hello world!", 0)."<br/>";
	echo substr("Hello world!", 50)."<br/>";
	echo substr("Hello world!", 5, 4)."<br/>";

	$string = "Good Morning, World";
    $a = substr($string, 5, 5);
    $b = substr($string, 5, -1);
    $c = substr($string, 0, -7);
	
	
	$d = substr($string, 5);
    $e = substr($string, 5, 5);
    $f = substr($string, 0, -1);
    $g = substr($string, -5);
    $h = substr($string, -5, 4);
    $i = substr($string, -5, -4);
	
	//echo $a throuh $i to see results
	
	
?>