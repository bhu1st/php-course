<?php 
/*
string strtoupper ( string source) - takes one string parameter, and returns that string entirely in uppercase
string strtolower ( string source) - to convert the string to lowercase
string ucfirst ( string source) - converts the first letter of every string to uppercase
string ucwords ( string source) - converts the first letter of every string to uppercase
*/


	echo $string = "i am falling in love with php programming"."<br/>";
	
    echo strtoupper($string)."<br/>";
    echo strtolower($string)."<br/>";
    echo ucfirst($string)."<br/>";
    echo ucwords($string)."<br/>";
    echo ucwords(strtolower($string))."<br/>";
	
	//eg. uppercasing first letter of person's name
	echo ucwords("mr. john doe");
	
?>