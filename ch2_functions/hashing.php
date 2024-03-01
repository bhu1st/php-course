<?php
/*

string sha1 ( string source [, bool raw_output])

SHA = "Secure Hash Algorithm"

It is a way of converting a string of any size into a 40-bit hexadecimal number that can be used for verification. 
Hashes are like unidirectional (one-way) encryption designed to check the accuracy of input. 
By unidirectional I mean that you cannot run $hash = sha1($somestring), 
then somehow decrypt $hash to get $somestring - it is just not possible, 
because a hash does not contain its original text.

//people who forget their password can simply reset it to a new password as opposed to retrieving it.


string md5 ( string source [, bool raw_output])

"MD" = Message Digest. 

Another popular algorithm for Hashing is MD5, 
The md5() function produces a data hash in exactly the same way as sha1(), 
with the difference is that it is only 32-bytes long.
Because sha1() is longer, it is less likely to have a "collision" - 
a situation where two different strings share the same hash.

*/

	//all the output exactly 40 characters in length
	echo sha1("hello password") . "<br/>";
    echo sha1("Hello password") . "<br/>";
    echo sha1("hello Password") . "<br/>";
	echo sha1("hello password", true) . "<br/>"; // returns raw binary format of length 20 chars
    
	echo "<br/>";
	//you can create a hash of strings of millions of characters in just 40 bytes.
	echo sha1("This is a very, very, very, very, very, very, very long secure data test")."<br/>";
	echo sha1("This is a very, very, very, very, very, very, very long secure data test")."<br/>";
	
	echo "<br/>";
	echo "<br/>";
    $md5hash = md5("my password");
    echo $md5hash;
	
	
?>
	
	