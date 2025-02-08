<html>
<head>

<title>Pattern</title>

</head>

<body>

<form method="post">

<label>Enter a digit -> </label>

<input type="number" name="num" required>

<br><br>

<button type="submit"> check </button>
</form>


<?php

//Write a php script to draw pattern as per user enter no.
****
****
****
****

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n = $_POST["num"];
	
	for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$n;$j++)
		{
			echo " * ";
			
			
		}
		echo "<br>";
	}
}
?>