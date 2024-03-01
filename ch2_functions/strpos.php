<?php 

//PHP considers the first letter of a string to be index 0

/*
int strpos ( string haystack, string needle [, int offset]) - returns array index of the first occurrence of a substring within a string
int stripos ( string haystack, string needle [, int offset]) - case-insensitive version
*/

	$string = "This is a strpos() test";    
	//gives 8 which means that the a strpos() found is actually the ninth character.
	echo strpos($string, "a") . "<br/>";
	
	
	$string = "This is a strpos() test";
	echo "<br/>";
	
    $pos = strpos($string, "This");
	
    if ($pos == false) {
        echo "Not found<br/>";  // outputs Not found  but "This" is in the index 0 of the string. Huh!!
    } else {
        echo "Found!<br/>";
    }
		
	/*
	If you try executing that, you will find that it outputs "Not found", 
	despite "This" quite clearly being in $string. 
	
	Is it another case sensitivity problem? Not quite. 
	This time the problem lies in the fact that "This" is the first thing in $string, 
	which means that strpos() will return 0. 
	
	However, PHP considers 0 to be the same value as false, 
	which means that our if statement cannot tell the difference between 
	"Substring not found" and "Substring found at index 0" - quite a problem!
	*/
	
	//correction. use ===  means "is identical to" 
	
	$string = "This is a strpos() test";
    $pos = strpos($string, "This");
    if ($pos === false) {
        echo "Not found<br/>";
    } else {
        echo "Found!<br/>";
    }
	
	
	
	$string = "This is a strpos() test";
    $pos = strpos($string, "i");
    if ($pos === false) {
        echo "Not found<br/>";
    } else {
        echo "Found at $pos!<br/>";
    }
	
	//next - tries to match the "i" in "is"
	
	$string = "This is a strpos() test";
    $pos = strpos($string, "i", 3); //specify the start position for strpos() to be index 3 , and it will report back the next "i" after it.
    if ($pos === false) {
        echo "Not found\n";
    } else {
        echo "Found at $pos!\n";
    }
	
	