<?php
    
	function __autoload($class) {
        include "classes/$class.php";
    }

    function init(site $site) {
        $site->addHeader("views/header.php");
        $site->addFooter("views/footer.php");		
    }
?>