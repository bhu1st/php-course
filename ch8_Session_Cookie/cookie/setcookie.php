<?php
//Cookies need to be set in the header. 
//i.e they must be sent before any HTML is set to the page, or they will not work.

//Calculate 60 days in the future in seconds
//seconds * minutes * hours * days + current time

//$valid_till = 60*60 * 24 * 30 + time(); //1 month

$valid_till = time() + 5*60; //5 minutes


setcookie('last_visit', date("m-d-Y H:i:s"), $valid_till); 

echo "Cookie set. See the value here:"

?>

<a href="display.php">Display cookie</a>