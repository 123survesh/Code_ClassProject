<html>
	
<body>
	<?php 
	$server="localhost";
	$username="root";
	$password="";
	$dbname=$_POST["dname"];
	$tname=$_POST["tname"];
	$conn = new mysqli($server,$username,$password,$dbname);
	$sql = "CREATE TABLE ".$tname." (Slno INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,stockBookItemNo VARCHAR(50) NOT NULL,nameOfTheItem VARCHAR(20),qty INT,working INT,serviceable INT,missing INT, condemned INT)";
	if ($conn->query($sql) === TRUE) {
    echo "<h2>Table ".$tname ." was created successfully</h2>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
	
	?>
	<center>
		<br><br><img src="copic.jpg">
	<br><br><h2>Do you want to create a new table entry?</h2>
    <form action="gettabledata.php" method="post"><br>
	<input type="submit" value="Create a table entry" style="height:40px;border:none;background-color:royalblue;color:white;font-size:20px;">
	
	</form> </form>
</body>

</html>