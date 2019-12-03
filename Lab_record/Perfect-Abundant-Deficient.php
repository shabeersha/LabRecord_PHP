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
	if ($_POST) {
	   $no = $_POST['number'];
	   $sum = 0;
	   for($i=1;$i<$no;$i++)
	   {
	   		if($no%$i==0)
	   			$sum = $sum+$i;

	   }
	   if($sum==$no)
	   		echo "perfect number";
	   else if($sum>$no)
	   		echo "Abundant Number";
	   	else
	   		echo "Deficient Number";
	}
?>