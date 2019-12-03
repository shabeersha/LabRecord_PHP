<!DOCTYPE html>
<html>
<head>
	<title>Display bio data of a person</title>
</head>
<body>
	<form action="" method="POST" style="text-align: center;">
		<h1><center>BIO-DATA</center></h1>
		Name: <input type="text" name="name1"><br>
		Address: <textarea name="address1"></textarea><br>
		Age: <input type="text" name="age1"><br>
		Mobile: <input type="text" name="mobile1"><br>
		Email: <input type="text" name="email1"><br>
		Qalification: <input type="text" name="qalification1"><br>
		<input type="submit" value="Display"><br>
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