<?php 
if($_POST)
{
$bln=$_POST['bal'];
$no=$_POST['acc'];
$db=college;
$con  =   pg_connect("host=localhost   dbname=college   user=postgres   password=root");
if ($con) 
{
echo '<br><br><br>Successfully Connected to '. $db."<br><br>";
$qry1="select * from account";
$qry2="update account SET balance=$bln where accno = '$no'";
$result1=pg_query($con, $qry1);
while ($row = pg_fetch_row($result1)) 
{ 
echo "<br>\n";
echo "accno: $row[0] name: $row[1] balance: $row[2]";
}
}
echo "<font color=green><br><br>Database Changed<br></font>";
$result2=pg_query($con, $qry2);
$result1=pg_query($con,  $qry1);
while ($row = pg_fetch_row($result1)) 
{ 
echo "<br>\n";
echo "accno: $row[0] name: $row[1] balance: $row[2]";
}
}
?>
