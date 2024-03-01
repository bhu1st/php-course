<?php

// lets's define some variables

$title='This page is pretty musical';
$content='There are unsmiling faces and bright plastic chains, and a wheel in perpetual motion.';
$author='The Alan Parsons Project.';
 
// now let's replace their values in the document
ob_start();
include('template.html');
//escaping any characters that would break a PHP string, dump it to a variable
$pageHTML=addslashes(ob_get_contents());
ob_end_clean();
 
// parse the template to replace variables with their values
//Using "eval()" we evaluate a string as if it were PHP code

eval("\$pageHTML=\"$pageHTML\";");
 
// send parsed file to the browser
echo $pageHTML;
 
?>
