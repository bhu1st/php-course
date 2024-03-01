<?php 


 mysql_connect("localhost", "user_name", "password") or die(mysql_error()); 
 mysql_select_db("database_name") or die(mysql_error()); 
 
 // We preform a bit of filtering 
 $find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 
 
 //Now we search for our search term, in the field the user specified 
 $data = mysql_query("SELECT * FROM users WHERE upper($field) LIKE'%$find%'"); 
 
 echo "<pre>";
 print_r($data);
 
 ?>
 