<?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        print "HTTP_REFERER : previou page {$_SERVER['HTTP_REFERER']}<br />";
    } else {
        print "You didn't click any links to get here<br />";
    }
	
	if (isset($_SERVER['PATH_INFO'])) {
        print "PATH_INFO : The page you requested was {$_SERVER['PATH_INFO']}<br />";
    } else {
        print "You didn't request a page<br />";
    }

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";


?>

<a href="superglobals.php">Click me!</a>