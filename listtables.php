<html>
<body>
<?php
$server="localhost";
$user="root";
$password="";
$dname=$_POST["dname"];
$conn =new mysqli($server,$user,$password,$dname);
$sql= "show tables from ".$dname;
$result = $conn->query($sql);
if($result->num_rows>0)
{
	echo "<table>
	<tr>
	<th>Tablename</th></tr>";
	while($table = $result->fetch_array())
{   
	echo "<tr><td>".$table."</td></tr>";
	
}
}
else{echo "No records found";}


$conn->close();
?>
</body>
</html>