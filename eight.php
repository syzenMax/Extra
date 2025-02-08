<html>
<head>

<title>Max num</title>

</head>

<body>


<form method="post">

<label>Enter a number-> </label>

<input type="text" name = "n1" > 
<input type="text" name= "n2" > 
<input type="text" name = "n3">

<button type="submit" name="btn"> Submit</button>


</form>

<?php
//Write a program to take 3 number as input and print maximum number.
if($_SERVER["REQUEST_METHOD"] == "POST" )
{
	$x= $_POST["n1"];
	$y=$_POST["n2"];
	$z= $_POST["n3"];
	
	if($x>=$y && $x >= $z)
		$max = $x;
	if($y>=$x && $y >= $z)
		$max = $y;
	if($z>=$x && $z >= $y)
		$max = $z;
	
	echo " <h3>Maximum number-> $max</h3>";
}
?>

</body>
</html>
		