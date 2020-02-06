<!DOCTYPE html>
<html>
<head>
	<title>Display The Mark list of a Student</title>
</head>
<body>
<h3><center>Marksheet</center></h3>
	<form method="POST" action="" style="text-align: center;" >
		<label>Regno:</label><input type="text" name="txtreg">
		<input type="submit" value="show">

	</form>
</body>
</html>


<?php
if($_POST){
	$rg=$_POST["txtreg"];
	

	$con=pg_connect("host=localhost dbname=college user=postgres password=root");

	if($con){
		echo "<p style='text-align: center;'>Successfully Connected..</p>";
		$qry="select * from student_mark where rollno=$rg";
		$result=pg_query($con,$qry);
		$nos=pg_num_rows($result);

		while ($row=pg_fetch_row($result)) {
			echo "<br>\n";
			echo "<p style='text-align: center;'>";
			echo "<br>Rollno:$row[0]
			<br>Name:$row[1]
			<br>Mark:$row[2]
			<br>Grade:$row[3]";
			echo "</p>";
		}
	}

	else{
		echo "Database connection_aborted";
	}
}

?>