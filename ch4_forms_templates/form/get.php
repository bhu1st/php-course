<?php 

//when we use GET method to submit form data 
//1.  the data will be visible in address bar of the browser in the form of "Query String"
// eg. http://localhost/for.php?name=firstname&submit=submit

//2. If the form method is get we should use $_GET to read form data in the processing part

//Note:
// --> never use GET method to submit "sensitive" information like user Passwords.

?>


<html>
<head>
<title>PHP : GET method</title>

<style>
body{
text-align:center;
}

h1{
color:#900;
margin:10px;
}

</style>

</head>



<body>
<h1>Please don't forget to read comments in this file get.php</h1>

<p>Please enter a string<br>
  eg. romantic</p>
  
<form name="form1" method="get" action="<?php $_SERVER['PHP_SELF'];?>">
  <div align="center">
    <p>
      <input type="text" name="name" size="50">
    </p>
    <p>
      <input type="submit" name="submit" value="Enter">
    </p>
  </div>
</form>

<div>  
	<?php 
	$fname=$_GET['name']; 
	$length=strlen($fname);
	echo "<br><br> You entered " . $fname;
	echo "<br> Which is $length character long.<br><br> Thank you" 	
	?>
</div>


</body>
</html>
