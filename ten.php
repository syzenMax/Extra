<html>

<head>

<title>Fionacci Series </title>

</head>

<body>

<form method="post">

<label>Enter a number-> </label>

<input type="number" name = "num" required>
<br><br>

<button type="submit"> Generate Fibonaaci Series</button>

</form>

<?php

//Write a program in php to generate fibonacci series till n number.

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n = $_POST["num"];
	
	$first = 0;
	
	$second = 1;
	
	echo "<h3> Fibonacci Series up to $n terms : </h3>";
	
	for($i=0;$i<$n;$i++)
	{
		echo $first . " ";
		
		$next = $first + $second;
		
		$first = $second;
		
		$second = $next;
	}
}
?>

</form>
</body>
</html>
