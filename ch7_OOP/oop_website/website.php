<?php
    include 'common.php';   

    $site = new site();
    
    init($site); // this is a function specific to this site!

    $page = new page("Semicolon Developers");
    $site->setPage($page);
    	
	$content = "Welcome to our web site!";
    $page->setContent($content);

	$site->display();
	
    
?>