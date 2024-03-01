<?php

if($_POST)
{
$name = $_POST['name']; 
$email = $_POST['email'];  
$username = $_POST['username']; 
$password = $_POST['password']; 
$gender = $_POST['gender']; 
// Full Name
if (eregi('^[A-Za-z0-9 ]{3,20}$',$name))
 {
	   $valid_name=$name;
 }
else
{  
    $error_name='Enter valid Name.';  
}
// Email 
if (eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $email))
 {
	   $valid_email=$email; 
 }
else
{  
    $error_email='Enter valid Email.';  
}
// Usename min 2 char max 20 char
if (eregi('^[A-Za-z0-9_]{3,20}$',$username))
 {
	   $valid_username=$username;
 }
else
{  $error_username='Enter valid Username min 3 Chars.';  }

// Password min 6 char max 20 char

if (eregi('^[A-Za-z0-9!@#$%^&*()_]{6,20}$',$password))
 {
	  $valid_password=$password;
 }
else
{  
    $error_password='Enter valid Password min 6 Chars.';  
}

// Gender
if ($gender==0)
 {
	    $error_gender='Select Gender'; 
 }
else
{  
$valid_gender=$gender;
    
}

if((strlen($valid_name)>0)&&(strlen($valid_email)>0)&&(strlen($valid_username)>0)&&(strlen($valid_password)>0) && $valid_gender>0 )
{
//mysql_query(' SQL insert statement');
header("Location: thanks.html");

}
else
{
}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>9lessons Registration Form Tutorial</title>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
<link rel="stylesheet" href="css/structure.css" type="text/css" />
<link rel="stylesheet" href="css/form.css" type="text/css" />

<!-- JavaScript -->
<script type="text/javascript" src="9lessons.js"></script>
<style type="text/css">
.err
{
font-size:11px;
padding-left:10px;
color:#CC0000;
float:left;

}
input
{
float:left;

}
</style>

</head>

<body id="public">
	<div style="height:30px"></div>

<div id="container">

<div style="height:30px"></div>

<form autocomplete="off"
	enctype="multipart/form-data" method="post" action=""  name="form">

<div class="info" style="padding-left:20px">
	<h2>Registration Form</h2>
	<div>More tutorials <a href="http://9lessons.blogspot.com" style="color:#0066CC; font-weight:bold">http://9lessons.blogspot.com</a> </div>
</div>

<ul>
		
	
<li id="foli1" 		class="   ">
	<label class="desc" id="title1" for="Field1">
		Full Name			</label>
	<div>
		<input id="name" 			name="name" 			type="text" 			class="field text medium" 			value="<?php echo $valid_name; ?>" 			maxlength="255" 			tabindex="1" 						/><span class="err"> <?php echo $error_name; ?></span>
		</div>
	</li>
	

<li id="foli2" 		class="   ">
	<label class="desc" id="title2" for="Field2">
		Email			</label>
	<div>
		<input id="email" 			name="email" 			type="text" 			class="field text medium" 			value="<?php echo $valid_email; ?>" 			maxlength="255" 			tabindex="2" 						/><span class="err"> <?php echo $error_email; ?></span>
		</div>
	</li>


<li id="foli3" 		class="   ">
	<label class="desc" id="title3" for="Field3">
		User-ID			</label>
	<div>
		<input id="username" 			name="username" 			type="text" 			class="field text medium" 			value="<?php echo $valid_username; ?>" 			maxlength="255" 			tabindex="3"  /><span class="err"> <?php echo $error_username; ?></span>
		</div>
	</li>


<li id="foli4" 		class="   ">
	<label class="desc" id="title4" for="Field4">
		Password			</label>
	<div>
		<input id="password" 			name="password" 			type="password" 			class="field text medium" 			value="<?php echo $valid_password; ?>" 			maxlength="255" 			tabindex="4" 						/><span class="err"> <?php echo $error_password; ?></span>
		</div>
	</li>


<li id="foli6" 		class="   ">
	<label class="desc" id="title6" for="Field6">
		Gender			</label>
	<div>
		<select id="gender" 			name="gender" 			class="field select medium" 			tabindex="5" style="float:left"> 
						<option value="0">Gender</option><option value="1">Male</option><option value="2">Female</option>
		  </select><span class="err"> <?php echo $error_gender; ?></span>
	</div>
	</li>


<li id="foli15" 		class="   "></li>


<li class="buttons">
				<input  type="submit" value="Submit" style=" background:#0060a1; color:#FFFFFF; font-size:14px; border:1px solid #0060a1"/>
	  </li>

	
</ul>
</form>
<div style="height:20px"></div>
</div><!--container-->
</body>
</html>