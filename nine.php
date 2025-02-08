<html>
<head>

<title>Odd Num</title>

</head>

<body>

<form method="post">


Enter Starting number -> <input type="number" name="start" required><br>
Enter Ending Number-> <input type="number" name="end" required> <br>

<button type="submit"> Find</button><br>

<?php

//write a  sum of odd number between two number.

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n1 = $_POST["start"];
	$n2 = $_POST["end"];
	
	$sum = 0;
	
	for($i=$n1;$i<=$n2;$i++)
	{
		//if($i % 2 !== 0)
			//echo "$i" . "<br>";
		$sum += $i;
		
		
	}
	echo "<h3>Sum=> $sum</h3>";
	
}

?>

</form

</body>
</html>