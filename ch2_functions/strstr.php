<?php 
/*
string strstr ( string haystack, string needle)
string stristr ( string haystack, string needle)

 finds the first occurrence of a substring (parameter two) inside another string (parameter one), 
 returns all characters from the first occurrence to the end of the string
 
*/

$string = "http://www.semicolondev.com";
echo strstr($string, "www");

?>
	