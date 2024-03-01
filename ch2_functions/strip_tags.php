<?php 
/*
string strip_tags ( string source [, string allowable_tags])

is a function that allows you to strip out all HTML and PHP tags from a given string (parameter one),
You can also use parameter two to specify a list of HTML tags you want.

----  This function can be very helpful if you ever display user input on your site -----

eg. 

If you create your own messageboard forum on your site a user could post a
title along the lines of: <h1>THIS SITE SUCKS!</h1>, which, 
because you would display the titles of each post on your board, 
would display their unwanted message in huge letters on your visitors' screens.


*/

	$input = "<em><strong>Hello!</strong></em>";
	echo $input . "<br>";
    echo $a = strip_tags($input)."<br>";
    echo $b = strip_tags($input, "<strong>")."<br>"; //allowable_tags are em and strong
	
	$another_input = '<em><strong style="font:72pt Times New Roman">THIS SITE SUCKS!</strong></em>';
	echo $another_input."<br/>";
	
	echo $c= strip_tags($another_input, "<strong>"); //allowed tag <strong>
	
	//If you allow <strong> tags, 
	//you allow all <strong> tags, 
	//regardless of whether they have any extra unwanted information in there, 
	//so it is best not to allow any tags.

?>