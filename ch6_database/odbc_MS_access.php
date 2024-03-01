<?php 
//connect to a DSN "mydb" with a user and password "marin" 
$connect = odbc_connect("MsAccess", "", "");


//query the users table for name and surname
$query = "SELECT name FROM user";


// perform the query
$result = odbc_exec($connect, $query);



//fetch the data from the database
while(odbc_fetch_row($result)){
  $name = odbc_result($result, 1);
  //$surname = odbc_result($result, 2);
  print("$name \n");
}



//close the connection
odbc_close($connect);
?>