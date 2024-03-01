<?php 

$myarray = array("Kathmandu", "Lalitpur", "Bhaktapur");

foreach($myarray as $val) {
echo $val."<br/>";
}


foreach($myarray as $key=>$val) {
echo $key ." -- ".$val."<br/>";
}

