<html>
<head>
<script>

function showdata() {
	
    var x = new XMLHttpRequest();
    
    var str = document.getElementById("data").value;  <!-- Fixed typo here -->

    x.open("GET", "p7onefinal.php?name=" + str, true);

    x.onreadystatechange = function()
	{
		
        if(x.readyState == 4 && x.status == 200)
		{  <!-- Added status check -->
            document.getElementById("info").innerHTML = x.responseText;
        }
    }

    x.send();
}
</script>
</head>

<body>

Enter Email: <input type="text" id="data" onkeyup="showdata();">
<div id="info"></div> <!-- Added div to display the response -->

</body>
</html>
