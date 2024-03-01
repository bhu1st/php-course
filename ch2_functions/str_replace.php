<?php 

/*
Prototype:
mixed str_replace ( mixed search, mixed replace, mixed source [, int &count])
mixed str_ireplace ( mixed search, mixed replace, mixed source [, int &count])

*/

	$string = "Hello world how are you?";
    $newstring = str_replace("world", "friends", $string);
    echo $newstring."<br/>";
	
	
	$string = "Hello world how are you?";
    $newstring = str_replace("World", "friends", $string); 
	//this doesn't work bcoz there is no "World" - capital W in original string
	
    echo $newstring."<br/>";  
	
	$string = "Hello world how are you?";
    $newstring = str_ireplace("World", "friends", $string); 
    echo "$newstring <br/>";
	
	echo "<br/><br/>";
	echo $string = "He had had to have had it";
	echo "<br/>";
    
	/*the fourth parameter is passed by reference, and PHP will set it to be the number of times your string was 	found and replaced
	*/	
	echo $newstring = str_replace("had", "oops", $string, $count);
	echo "<br/>";
    echo "$count changes were made in '$string'";
	
	
?>