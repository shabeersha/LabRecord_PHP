<!DOCTYPE html>
<html>
<head>
	<title>Display A List Of Fruits In A ListBox</title>
</head>
<body>
	<form action="" method="POST">
		Choose Your Favorite Fruit<br><br>
		<select name="f">
			<option value="....">Please Select
			<option value="grape">Grape
			<option value="Banana">Banana
			<option value="Chiku">Chiku
			<option value="Apple">Apple
			<option value="Orange">Orange
			<option value="Pine Apple">Pine Apple

		</select><br><br>

		<input type="submit" value="SELECT">
	</form>

</body>
</html>

<?php

	if($_POST)
	{
		echo "<h2> You Have That You Like </h2>";
		echo $_POST["f"];
	}
?>