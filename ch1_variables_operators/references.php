<?php
    $a = 10;
    $b =& $a;
    print $a;
	echo "<br>";
    print $b;
	echo "<br>";
    ++$a;
    print $a;
	echo "<br>";
    print $b;
	echo "<br>";
    ++$b;
	echo "<br>";
    print $a;
	echo "<br>";
    print $b;
?>