<?php


$conn = mysqli_connect("localhost", "user_name", "password", "database_name") or die(mysqli_connect_error($conn));

// We preform a bit of filtering 
$find = strtoupper($find);
$find = strip_tags($find);
$find = trim($find);

//Now we search for our search term, in the field the user specified 
$data = mysqli_query($conn, "SELECT * FROM users WHERE upper($field) LIKE'%$find%'");

echo "<pre>";
print_r($data);

?>