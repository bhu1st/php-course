<?php
    
	$conn=mysqli_connect("localhost", "root", "","semicolondb");
	
    $result = mysqli_query($conn,"SELECT * FROM users");

    if (mysqli_num_rows($result)) {       
        
        while ($row = mysqli_fetch_assoc($result)) { 
/*
mysql_fetch_assoc() takes one row from a MySQL result, 
and converts it to an associative array with each field name as a key 
and the matching field value as the value. 

mysql_fetch_assoc() increments its position each time it is called - 
calling it for the first time reads the first row, the second time the second row, etc, 
until you run out of rows in which case it returns false. 

In this respect it works like the foreach() array function.
*/          
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	
            
        }
    }
?>