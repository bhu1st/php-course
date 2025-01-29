<?php

//connect to server
$conn = mysqli_connect("localhost", "root", "");

//select the database to use
mysqli_select_db($conn, "semicolondb");

//query to database
$result = mysqli_query($conn, "SELECT * FROM users");

//what is number of rows in of the query result?? i.e all rows in users
$numrows = mysqli_num_rows($result);

// display the number of rows
echo "There are $numrows users<br/>";

//close the last-opened MySQL connection
mysqli_close($conn);

?>