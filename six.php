<html>

<head>

<title>Fatorial of num</title>

</head>

<body>

<form method="post">

<label>Enter a number-> </label>

<input type="number" name="num" required>

<br><br>

<button type="submit">Enter </button>

</form>


<?php

//Write a program to get factorial of that number

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$num = $_POST["num"];
	
	$sum = 1;
	
	for($i=1;$i<=$num;$i++)
	{
		$sum *= $i;
	}
	
	echo "<h3> Factorial -> $sum</h3>";
}

?>

</body>
</html>