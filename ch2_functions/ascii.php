<?php 

/*
string chr ( int ascii)  - convert to ASCII from textual characters
int ord ( string string)  - it does the opposite - it takes a string and returns the equivalent ASCII value.
*/

$mystring = "I love my country Nepal! It's wonderful.";

echo "Characters - ASCII Value<br/>";

for ($i = 0; $i < strlen($mystring); $i++){
	if ($mystring{$i} == " ") {
		echo "[space]" . " - " . ord($mystring{$i}) ."<br/>";
	}else {	
		echo $mystring{$i} . " - " . ord($mystring{$i}) ."<br/>";
	}

}

$character = chr(65);
echo "ASCII number 65 = ASCII character $character<br/>";
?>