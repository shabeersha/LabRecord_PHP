<!DOCTYPE html>
<html>
<head>
	<title>Generate Pay SLip</title>
</head>
<body>
	<center><h2>Payroll Statement</h2></center>
	<form action="" method="POST">
		<table border="0">

			<tr><td>Employeee name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Designation</td>
				<td><select name="desig">
					<option>(please Select)</option>
					<option value="Manager">Manager</option>
					<option value="Supervisor">Super Visor</option>
					<option value="Clerk">Clerk</option>
					<option value="Peon">Peon</option>
					</select>
				</td>
			</tr>
			<tr>
			     <td>Basic Salary</td>
			     <td><input type="text" name="salary"></td>
			</tr>
			
		</table>

		<input type="submit">
		
	</form>


</body>
</html>


<?php
	
	if ($_POST) {
		$ename=$_POST["name"];
		$Designation=$_POST["desig"];
		$basic=$_POST["salary"];

		if (is_numeric($basic)) 
			{
				if ($basic!=NULL)
				{
					switch ($Designation) {
						case 'Manager':
							$hra=($basic*25)/100;
							$conv=1000;
							$extra=500;
							$gross=$hra+$conv+$extra+$basic;
							display($gross,$ename,$Designation);
							break;

						case 'Supervisor':
							$hra=($basic*25)/100;
							$conv=750;
							$extra=200;
							$gross=$hra+$conv+$extra+$basic;
							display($gross,$ename,$Designation);
							break;

						case 'Clerk':
							$hra=($basic*25)/100;
							$conv=500;
							$extra=100;
							$gross=$hra+$conv+$extra+$basic;
							display($gross,$ename,$Designation);
							break;

						case 'Peon':
							$hra=($basic*25)/100;
							$conv=250;
							$extra=0;
							$gross=$hra+$conv+$extra+$basic;
							display($gross,$ename,$Designation);
							break;
						
						default:
							echo "Invalid Designation! try again";
							break;
					}

				} 	
			}
		}

		function display($gross,$ename,$Designation){
							if ($gross<=2000)
							 	$intax=0;
							elseif ($gross>2000&&$gross<4000)
								$intax=($gross*3)/100;
							elseif ($gross>4000&&$gross<5000)
								$intax=($gross*5)/100;
							elseif ($gross>5000)
								$intax=($gross*8)/100;

							$net=$gross-$intax;
							echo "<b>Employee Name:</b>$ename<br>";
							echo "<b>Designation:</b>$Designation<br>";
							echo "<b>salary:</b>$net<br>";
		}
?>