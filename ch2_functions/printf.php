<?php 
/*
void printf ( string format [, mixed args [, mixed ...]])

Consider, for example, 
that you can now put the strings for parameter one separate from the printf() call,
which means you can change languages at the drop of a hat.

*/

	
	//data
	$string = "apple and black berry";	
	printf("<strong>%s</strong> - are no more fruits.", $string);
	
	echo "<br>";
	    
	//language
	$eng = "<strong>%s</strong> - are no more fruits.";
	$nep = "<strong>%s</strong> अब फलफूल रहेनन !";
	
	//use following code depengind upon language
	printf($eng, $string);
	echo "<br>";
	printf($nep, $string);
	echo "<br>";
	
	
	$foo = "you";
    $bar = "the";
    $baz = "string";
	
	echo "<br/>";
    printf("Once %s've read and understood %s previous section, %s should be able to use %s bare minimum %s control functions to help %s make useful scripts.", $foo, $bar, $foo, $bar, $baz, $foo);
	
	$number = 123;
	echo "<br/>";
    printf("123 in binary is: %b", $number);
	echo "<br/>";
    printf("123 in hex is: %x", $number);
	echo "<br/>";
    printf("123 as a string is: %s", $number);
	echo "<br/>";
    printf("%% allows you to print percent characters");
	echo "<br/>";
	
	
	$number = 123.456;
    $formatted = number_format($number, 2);
    echo "Formatted number is $formatted <br/>";
	
    printf("Formatted number is %.2f", $number);
	
	
	
?>