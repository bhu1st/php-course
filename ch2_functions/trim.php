<?php 
/*

Trims "whitespace" = spaces, new lines, and tabs

string trim ( string source [, string charlist]) - strip whitespace from either side of a string variable

//ltrim() and rtrim(), which do the same thing but only trim from the left and right respectively.

string ltrim ( string source [, string charlist])
string rtrim ( string source [, string charlist])

*/

 echo trim("      This is a test ")."<br/>"; 
 echo trim("      This is a test ", " ts")."<br/>"; 
 
    echo ltrim(" .This is a test.")."<br/>"; 



?>