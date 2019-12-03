<!DOCTYPE html>
<html>
<head>
	<title>Amstrong</title>
</head>
<body>
	<h2>Enter the number</h2><br>
	<form action="" method="post">
		<input type="Number" name="number">
		<input type="submit">
	</form>
</body>
</html>

<?php

if($_POST)
{
	$first_variable=-1;
	$second_variable=1;
	$n=$_POST['number'];

for($i=1;$i<=$n;$i++)
{
	$current_variable=$first_variable+$second_variable;
	$first_variable=$second_variable;
	$second_variable=$current_variable;
	echo $current_variable."<br>";
}

}

?>