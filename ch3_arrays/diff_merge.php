<?php

	$cities1 = array("Kathmandu", "Chitwan", "Pokhara", "Dharan");
    $cities2 = array("Kathmandu", "Nepalgung", "Solu");
	
    $common = array_intersect($cities1, $cities2);
	
    $diff = array_diff($cities1, $cities2);
	
    //merger both array
    $both = array_merge($cities1, $cities2);
	
    echo "<pre>";
	print_r($common);	
    print_r($diff);
    print_r($both);
	
	echo "</pre>";
	
	?>