

<!DOCTYPE html>
<html>
<head>
	<title>Display bio data of a person</title>
</head>
<body>
	<form action="" method="POST" style="text-align: center;">
		<h1><center>BIO-DATA</center></h1>
		<p>Name:</p> <input type="text" name="name1">
		<p>Address:</p> <textarea name="address1"></textarea>
		<p>Age:</p> <input type="text" name="age1">
		<p>Mobile:</p> <input type="text" name="mobile1">
		<p>Email:</p> <input type="text" name="email1">
		<p>Qalification:</p> <input type="text" name="qalification1"><br>
		<input type="submit" value="Display" style="margin-top: 20px;">
	</form>
</body>
</html>


<?php

	if($_POST)
	{
		echo "<h1><center>BIO-DATA</center></h1>";
		echo "Name: ".$_POST["name1"]."<br>";
		echo "Address: ".$_POST["address1"]."<br>";
		echo "Age: ".$_POST["age1"]."<br>";
		echo "Mobile: ".$_POST["mobile1"]."<br>";
		echo "Email: ".$_POST["email1"]."<br>";
		echo "Qalification: ".$_POST["qalification1"]."<br>";
	}

?>