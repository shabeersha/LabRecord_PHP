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
		$number=(int)$_POST['number'];
		$temp=$number;
		$sum=0;
		while($temp!=0) {
			$rem=$temp%10;
			$sum=$sum+($rem*$rem*$rem);
			$temp=$temp/10;
		}
		if($number==$sum)
			echo "Amstrong Number";
		else
			echo "Not an Amstrong";
	}

?>