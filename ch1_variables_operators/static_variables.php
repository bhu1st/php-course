<?php 

function gem(){
	$c = 0;
	$c++;
	echo $c;
}

function gems(){
	static $count = 0;
	$count++;
	echo $count;
}

gem();
echo "<br>";
gem();
echo "<br>";

gems();
echo "<br>";
gems();
echo "<br>";


?>