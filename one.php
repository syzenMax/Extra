<html>
<head>

<title>Reverse string</title>


</head>

<body>
<form method = "post">

   <label>Enter a string-> </label>
   <input type = "text" name = "data" required>
   <button type="submit"> Reverse </button>
   
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$input = $_POST["data"];
	$reverse = strrev($input);
	echo "<h3>Reversesd string->  $reverse</h3>";
}

?>

</body>
</html>