<html>

<head>

<title>Even or Odd</title>

</head>

<body>

<form method="post">

<label>Enter a number-> </label>
<input type="number" name="num" required>
<br><br>


<button type="submit"> check </button>

</form>

<?php

//write php program to check entered number is even or odd

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$num = $_POST["num"];
	
	if($num % 2 ==0)
	{
		echo "<h3> $num is even </h3>";
	}
	else
	{
		echo "<h3> $num is odd </h3>";
	}
	
}
?>

</body>
</html>
