<html>
<head>

<title>Sum of n number</title>

</head>

<body>

<form method="post">

<label>Enter a number-> </label>
<input type="number" name = "num" required>
<br><br>

<button type="submit" > check </button>


</form>

<?php

//Write a program to get sum of entered number
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$num = $_POST["num"];
	
	$sum =0;
	
	for($i = 1;$i<=$num;$i++)
	{
		$sum += $i;
	}
	
	echo "<h3> Sum is => $sum </h3>";
}

?>

</body>
<html>
	
	