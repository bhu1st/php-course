<?php 

/*
int strlen ( string source)  - returns the number of characters in the string
mixed count_chars ( string string [, int mode]) - returns an array containing the letters in param string and how many times each letter was used
mixed str_word_count ( string string [, int format]) - returns the number of words used.
*/


	echo strlen("Hello") . "<br/>";
    echo strlen("How are you ?") . "<br/>";
	
	echo $str = "This is a test, only a test, and nothing but a test.";
	echo "<br/>";
    
  
	
	//returns an array of exactly 255 elements by default, with each number in there evaluating to an ASCII code
	//$a = count_chars($str);
	
	//if you pass 1, only letters with a frequency greater than 0 are listed, if you pass 2 only letters with a frequency equal to 0 are listed.
	$a = count_chars($str, 1);

	   
	//calling str_word_count() without any parameters returns the number of words used.
	//$b = str_word_count($str);
	
	
	//if you pass 1 as the second parameter it will return an array of the words found
	$b = str_word_count($str, 1);
    
	
    //passing 2 does the same, except the key of each word will be set to the position that word was found inside the string.
	$c = str_word_count($str, 2);
	
    //it just returns the number of unique words that were found in the string
	$d = str_word_count($str);
    
	echo "<pre>";
	print_r($a);
    print_r($b);
    print_r($c);
	echo "</pre>";
	
    echo "There are $d words in the string\n";
	
