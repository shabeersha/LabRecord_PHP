<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<h1><center>List of Product</center></h1>
	<form method="POST" action="" >
		Itemcode :<input type="text" name="icode"><br>
		Item Name:<input type="text" name="iname"><br>
		Unit Prize:<input type="text" name="price"><br>
		<input type="submit" value="Display">
	</form>
</body>
</html>



<?php

if ($_POST) {
	
	$no=$_POST["icode"];
	$name=$_POST["iname"];
	$price=$_POST["price"];


	$con=pg_connect("host=localhost dbname=product user=postgres password=root");

	if($con){
		echo "Successfully connected";
		$qry="insert into products(itemcode,itemname,unitprice)values($no,$name,$price)";
		$result=pg_query($con,$qry);
		$qry1="select * from products";
		$result1=pg_query($con,$qry1);
		while ($row=pg_fetch_row($result1)) {
			echo "<br>";
			echo "Item no:$row[0] <br>Item name:$row[1] <br>Unit Price:$row[2]";
		}
	}
	else
	{
		echo "Database connection_aborted";
	}
}

?>