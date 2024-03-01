<?php 

/*

string str_pad ( string input, int pad_length [, string pad_string [, int pad_type]])

makes given string (parameter one) larger by X number of characters (parameter two) by adding on spaces

*/

	$string = "PHP";
	echo $newstring = str_pad($string, 20)."<br/>";
	
	echo $newstring = str_pad($string, 20,"&nbsp;")."<br/>"; // for padding space in HTML

		
    echo $newstring = str_pad($string, 20, '*')."<br/>";
	
	
	//fourth parameter, which allows us to specify which side we want the padding added to. 
	//The fourth parameter is specified as a constant, 
	//and you either use STR_PAD_LEFT, STR_PAD_RIGHT, or STR_PAD_BOTH
	
    echo $a = str_pad($string, 20, '-', STR_PAD_LEFT)."<br/>";	
    echo $b = str_pad($string, 20, '-', STR_PAD_RIGHT)."<br/>";
    echo $c = str_pad($string, 20, '-', STR_PAD_BOTH)."<br/>";
	
?>