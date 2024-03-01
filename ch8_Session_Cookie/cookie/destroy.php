<?php 
 
//When deleting a cookie you should assure that the
//expiration date is in the past, to trigger the removal mechanism in your browse
 
 //set time to past  
 $valid_till = time() - 60*60; //an hour ago
 
 //set cookie to past to destroy it
 //setcookie('last_visit', date("m-d-Y H:i:s"), $valid_till);
 
 setcookie('last_visit', NULL, -1); 
 unset($_COOKIE['last_visit']); 
 
 //check whether cookie unset or not 
 echo "Cookie Removed : ".$_COOKIE['last_visit'];
 ?>  
 <br/>
 <a href="display.php">Check It</a><br/>
 <a href="setcookie.php">or Set Cookie again</a>