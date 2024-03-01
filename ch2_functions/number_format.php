<?php
/*
string number_format ( float number [, int decimal_places])
string number_format ( float number, int decimal_places, string decimal_point, string thousands_seperator)

takes a minimum of one parameter, the number to format, and 
returns that same number with grouped thousands (rounding fractions)

param 1 : the number to format
param 2 : the number of decimal places to include
param 3 : specify the character to use as your decimal point


number_format() is incredibly useful when it comes to formatting money for checkout pages
in shopping baskets, although it is useful anywhere you need to represent large numbers - 
adding a thousand separator invariably makes things easier to read.

*/

	$num = 12345.6789;
	echo $num . "<br/>";
    echo $a = number_format($num)."<br/>";;
    echo $b = number_format($num, 2)."<br/>";;
    echo $c = number_format($num, 2, ',', '.')."<br/>";;

?>