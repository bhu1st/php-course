<?php 

$array = array('lastname', 'email', 'phone');

$comma_separated = implode(",", $array); //Join array elements with a glue (comma in this case) string.

echo $comma_separated; // lastname,email,phone


// explode()
//Returns an array of strings, each of which is a substring of string formed by 
//splitting it on boundaries formed by the string delimiter.


$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]."<br/>"; // piece1
echo $pieces[1]."<br/>"; // piece2


$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user."<br/>"; // foo
echo $pass."<br/>"; // 


?>