<?php 

   //Refer to : https://www.geeksforgeeks.org/mysql-full-text-search/
   
    $conn=mysqli_connect("hostname", "username", "password","our_db"); 
    $query = " 
        SELECT * FROM articles 
        WHERE MATCH(title, body) AGAINST ('PHP') 
    "; 
    $sql = mysqli_query($conn,$query); 
    /* output results */ 
?>