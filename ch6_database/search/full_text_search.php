<?php 

   //Full Text Search Functions : http://dev.mysql.com/doc/refman/5.0/en/fulltext-search.html
   
   //Also refer : http://www.mysqlfulltextsearch.com
   
   mysql_connect("hostname", "username", "password"); 
    mysql_select_db("our_db"); 
    $query = " 
        SELECT * FROM articles 
        WHERE MATCH(title, body) AGAINST ('PHP') 
    "; 
    $sql = mysql_query($query); 
    /* output results */ 
?>