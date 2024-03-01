<html>
<head>
<title>PHP : POST method</title>

<style>
body{
text-align:center;
}
</style>

</head>



<body>
<p>Please enter a string<br>
  eg. romantic</p>
  
<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
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
	$fname=$_POST['name']; 
	$length=strlen($fname);
	echo "<br><br> You entered " . $fname;
	echo "<br> Which is $length character long.<br><br> Thank you" 	
	?>
</div>


</body>
</html>
