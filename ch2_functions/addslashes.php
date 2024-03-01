<?php 

/*

string addslashes ( string source) - returns string with these offending characters escaped so that they are safe for use.
string stripslashes ( string source) - removes one set of slashes.

on cases: 

where single quotes ', double quotes ", and backslashes \ can cause problems - 
eg. databases, files, and some protocols require that you escape them with \, 
making \', \", and \\ respectively

*/


	$string = "I'm a Semicolon Developer and I'm having fun!";
    echo $a = addslashes($string)."<br/>";
    echo $b = addslashes($a)."<br/>";
    echo $c = addslashes($b)."<br/>";
	
	echo $d = stripslashes($c)."<br/>";
    echo $e = stripslashes($d)."<br/>";
    echo $f = stripslashes($e)."<br/>";;