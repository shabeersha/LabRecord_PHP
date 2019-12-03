

<!DOCTYPE html>
<html>
<head>
	<title>Palindrome</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="<?php $_php_self ?>">
		<input type="text" name="word">
		<input type="submit" name="check">
	</form>

</body>
</html>

<?php


if(isset($_GET["word"]))
{
	$string1=$_GET["word"];

	palindrome($string1);
}
	function palindrome($string)
	{
		if(strrev($string)==$string)
		{
			echo ("<p class="."txtblue".">string length &nbsp;".strlen($string)."</p>");
		}
		else
		{
			echo ("<p class="."txtred".">string length".strlen($string)."</p>");
		}
	}

?>