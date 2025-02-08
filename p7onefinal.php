<?php
$n = $_GET["name"];

if(Filter_var($n, FILTER_VALIDATE_EMAIL))
{
    echo "<br>Valid email format";
} 
else 
{
    echo "<br>Invalid format";
}
?>
