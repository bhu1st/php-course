<?php
    
    $now = time();  //returns current time in the server in unix timestamp
    echo $now."<br/>";
	
	echo strtotime("21st April 2011")."<br/>";
    echo strtotime("21 Apr. 2011 15:30")."<br/>";
    echo strtotime("2011/04/21")."<br/>";
	
	$mydate = strtotime("Christmas 1979")."<br/>";
    if ($mydate == -1) {
        echo "Date conversion failed!"."<br/>";
    } else {
        echo "Date conversion succeeded!"."<br/>";
    }
	
	//The first line will print the timestamp for the next Sunday (not the upcoming Sunday, but the one after)
	echo strtotime("Next Friday")."<br/>";	
	//20 days time from today
    echo strtotime("20 days", time())."<br/>";
	//subtracts a year from a given timestamp
    echo strtotime("1 year ago", 123456789)."<br/>";
	
	//PHP data functions
	echo date("Y-m-d H:i") . "<br/>";    
	echo date("m-d-Y h:i:s") . "<br/>";    
    echo "Current Year : " . date("Y") . "<br/>";
    
	
?>