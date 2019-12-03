<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="" method="POST" style="text-align: center;">
		Username:<input type="text" name="uname"><br>
		Password:&nbsp;<input type="password" name="pass"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="Login">
		
	</form>

</body>
</html>

<?php
if($_POST)
{
	$usr1=$_POST["uname"];
	$passwd=$_POST["pass"];


	$con=pg_connect("host=localhost dbname=college user=postgres password=root");
	if($con)
	{
		echo "Successfully connected to Database";

		$qry="select username,password from student_login where username='$usr1' and password='$passwd'";
		$result=pg_query($con,$qry);
		$nos=pg_num_rows($result);

		if($nos)
		{
			echo "<br> $usr1, You Are logged in Successfully...";
		}
		else
			echo "Login denied";
	}
	else{
		echo "Database connection aborted";
	}
}
?>