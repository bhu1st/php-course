<?php 
/*
int strcmp ( string str1, string str2)
int strcasecmp ( string str1, string str2)

It takes two words for its two parameters, 

returns -1 : if word one comes alphabetically before word two, 
returns  1  : if word one comes alphabetically after word two, 
or returns 0 : if word one and word two are the same.

*/

	$string1 = "HTML";
    $string2 = "PHP";
    $result = strcmp($string1, $string2);

    switch ($result) {
	
        case -1: 
				echo "-1 : HTML comes before PHP"; 
				break;
        case 0: 
				echo "0 : HTML and PHP are the same"; 
				break;
        case 1: 
				echo "1 : HTML comes after PHP"; 
				break;
    }
	
	echo "<br/>";
	$string1 = "PHP";
    $string2 = "PHP";	
    if (!strcmp($string1, $string2)) echo "PHP/PHP cpmparison returns 0. be careful!";
	
	echo "<br/>";	
	if ($string1 == $string2) {
		echo "strings match : use == method if you find it easy!";
	}
	

?>