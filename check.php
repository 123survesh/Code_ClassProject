<html
<body>
<center>

<?php
	if(!($_POST["id"] === NULL || $_POST["pwd"]) === NULL)
	{
		if($_POST["id"]==="survesh" && $_POST["pwd"]==="Shinr@tense1")
echo "Welcome master Survesh!!";
else
echo "Who are you? You sniffelling dog. Get out!!";
	}
	else{echo "You Have left sapces blank. PLEASE DO FILL THEM IN","<br><center><a href="http://localhost/myprograms/password.html"> Go back </a> </center>";}

?>
</center>
</body>
</html>