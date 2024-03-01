<?php 
$data = "outside";
function display(){
echo $data;
}

function display_global(){
global $data;
echo $data;
}
display();
echo "<br>";
display_global();

?>