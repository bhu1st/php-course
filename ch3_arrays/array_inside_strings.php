<?php 

//using array inside strings to echo

$myarray['foo'] = "value";
// echo "This is from an array: $myarray['foo']<br/>";  - this won't work on arrays

echo "This is from an array: {$myarray['foo']}<br/>"; // use brackets {}

	
?>