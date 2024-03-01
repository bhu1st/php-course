<?php
    
	//downloads the default web page of semicolondev.com,
	//and then transfers it to you as if it were part of your site
	
	$site = fopen("http://semicolondev.com/projects/", "r");
    
	$site_content = fread($site, 200*1024);
    
	fclose($site);
    
	echo $site_content;
?>