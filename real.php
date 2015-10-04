<html>
	<body>
		<?php 
		$username="root";
		$servername="localhost";
		$password="";
		$dbid=$_POST["dbname"];
		$con = new mysqli($servername,$username,$password);
		$sql = "CREATE DATABASE ".$dbid;
		if ($con->query($sql) === TRUE)
		 {
        echo "Database ".$dbid." created successfully";
         } 
      else 
	  {
       echo "Error creating database: " . $con->error;
           }

$con->close();
		?>
		<br><br><h2>Would you like to create tables for your database?</h2>
		<form action="gettablename.php" method="post" >

		 <input type="submit" value="Create Table" style="border:none;background-color:royalblue;color:white;font-size:20px;height:30px;">
		</form>
	</body>
</html>