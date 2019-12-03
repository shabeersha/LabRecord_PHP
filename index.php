<!DOCTYPE html>
<html>
<head>
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Home | Shabeer_Bin_Khalid </title>
</head>
<body>
	<?php
 echo "hello world"."<br>";

 $num1=$_Get['num1'];
 $num2=$_Get['num2'];
 $res=$num1+$num2;
 

 echo "<br><br>";

 $Brands = array("BMW","VOLVO","TOYOTA");

 print_r($Brands);

 
 
 
?>


<ul>
	<li>
		<a href="welcome.html">Welcome</a>
	
    </li>

</ul>





<form method="post" action="" >
	<input type="text" name="num1">
	<input type="text" name="num2">
	<br>
	<input type="submit" name="submit" value="submit" >

</form>


<br>
<br>
<button type="button" class="btn btn-outline-primary btn-lg">Basic</button>
<button type="button" class="btn btn-outline-info">info</button>


</body>
</html>