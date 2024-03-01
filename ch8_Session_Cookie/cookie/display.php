<?php
if(isset($_COOKIE['last_visit'])) $visit = $_COOKIE['last_visit']; 
else echo "You've got some stale cookies!";
echo "Your last visit was - ". $visit;
?>
<br/>
<a href="destroy.php">Destroy cookie</a>