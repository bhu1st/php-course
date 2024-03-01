<?php
/*
string wordwrap ( string source [, int width [, string break [, boolean cut]]])

If you pass a sentence of text into wordwrap() 
with no other parameters, it will return that same string wrapped 
at the 75-character mark using "\n" for new lines

cases: 

1. When printing to a console as opposed to a web page, 
text does not wrap automatically. 
Therefore, unless you want your users to scroll around a lot, 
it is best to wrap text for them.

2. When printing to a web page that has been designed to exactly accommodate a certain width of text, 
allowing browsers to wrap text whenever they want will likely lead to 
the design getting warped.

*/

$text = "Word wrap will split this text up into smaller lines, which makes for easier reading and neater layout.";
//use <br />, a HTML new line marker, and split up words at the 20-character mark

$text = wordwrap($text, 20, "<br />");
//if you set the second parameter to 20, 
//wordwrap() will always wrap when it hits 20 characters or under - not 21, 22, etc

echo $text;

echo "<br/><br/>";


//supply 1 as a fourth parameter, which enables "cut" mode - 
//words over the limit will be cut up if this is enabled. 

$text = "Hyper-terminal is supposed to be a long word.";
$text = wordwrap($text, 6, "<br/>", 1);
echo $text;