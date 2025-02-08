<html>
<head>

<title>POS or NEG</title>

<body>

<form method="post">

<label>Enter a number-> </label>

<input type="number" name = "num" required>
<br><br>

<button type="submit"> Check </button>

</form>


<?php

//Write a program to check whether entered number is positive or negative.

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$num = $_POST["num"];
	
	if($num > 0)
	{
		echo "<h3> $num is positive </h3>";
	}
	else
	{
		echo "<h3> $num is negative </h3>";
	}
}
?>

</body>
</html>