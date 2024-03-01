<?php
/*
resource mysql_connect ( [string server [, string username [, string password [, bool new_link [, int client_flags]]]]])

bool mysql_select_db ( [string database_name [, resource link_identifier]])

resource mysql_query ( string query [, resource link_identifier])

int mysql_num_rows ( [resource result])

*/


    //connect to server
	mysql_connect("localhost", "root", ""); 
    
	//select the database to use
	mysql_select_db("semicolondb"); 
	
	//query to database
	$result = mysql_query("SELECT * FROM users");
    
	//what is number of rows in of the query result?? i.e all rows in users
	$numrows = mysql_num_rows($result); 
	
    // display the number of rows
	echo "There are $numrows users<br/>";
	 
	//close the last-opened MySQL connection
	mysql_close();
	
	
?>