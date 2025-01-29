<?php

if (isset($_POST['submit'])) {

	$host = "localhost";
	$username = "root";
	$password = "";

	$database = "semicolondb"; //put your users database here which have users table with following fields

	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];
	$web = $_POST['web'];

	$conn = mysqli_connect($host, $username, $password, $database);

	if (mysqli_connect_error()) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$query = "INSERT INTO users VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
	mysqli_query($conn, $query);
	mysqli_close($conn);
}

?>

<form action="insert.php" method="post">
	First Name: <input type="text" name="first"><br>
	Last Name: <input type="text" name="last"><br>
	Phone: <input type="text" name="phone"><br>
	Mobile: <input type="text" name="mobile"><br>
	Fax: <input type="text" name="fax"><br>
	E-mail: <input type="text" name="email"><br>
	Web: <input type="text" name="web"><br>
	<input type="submit" name="submit" value="submit">
</form>