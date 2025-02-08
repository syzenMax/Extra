<html>
<head>
<title>Find smallest num</title>

<body>


<form method="post">

<label> Enter First Number-> </label>
<input type="number" name="n1" required>
<br><br>


<label>Enter Second Number-> </label>
<input type="number" name="n2" required>
<br><br>

<button type="submit" > Find Smallest </button>

</form>

<?php


//write a scirpt in php to enter two number
//and find the smallest out of them using if else condition

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	
	if($n1 < $n2)
	{
		echo "<h3> The Smallest Number-> $n1</h3>";
	}
	elseif($n2 < $n1)
	{
		echo "<h3>The Smallest Number-> $n2 </h3>";
	}
	else
	{
		echo "<h3>Both number are equal </h3>";
	}
}
?>
	
</body>
</html>