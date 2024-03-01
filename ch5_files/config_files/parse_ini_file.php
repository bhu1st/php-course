<?php

	define("BINARY", "Save was binary");
    
	$inifile = parse_ini_file("config.ini");
    
	echo "<pre>";
	
	print_r($inifile);
	
    $inifile = parse_ini_file("config.ini", true);
    
	print_r($inifile);


?>