<?php

//include parser class
require_once('class.parser.php');

//instantiate a new template parser object

$tp = new parser('template.html');


// define parameters for the class
$tags=array(
	'meta'=>'&lt;meta&gt; tag goes here ',
	'title'=>'Semicolon Developers - php template parser example',
	'navbar'=> '<a href="#">Home</a> <a href="#">About</a> <a href="#">Services</a> <a href="#">Contact Us</a>',
	'leftcontent'=>'left sidebar content here. this content remains static most of the time',
	'maincontent'=>'content.php',
	'rightcontent'=>'right_sidebar.php',
	'footer'=>'&copy;'.date('Y')
);

// parse template file
$tp->parseTemplate($tags);

// display generated page
echo $tp->display();

?>
 