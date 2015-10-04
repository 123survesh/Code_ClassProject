<html>
	<head>
		<style>
			table{
				padding:5px;
				text-align:center;
			
			}
			</style>
		</head>
<body>
<?php
$server="localhost";
$user="root";
$password="";
$tname=$_POST["tname"];
$dname=$_POST["dname"];
$conn= new mysqli($server,$user,$password,$dname);
$sql="SELECT * FROM ".$tname;
$result= $conn->query($sql);
if($result->num_rows>0)
{
	echo "<center><h1>Table ".$tname."</h1><table border='visible'>
	<tr>
	<th>Sl.No.</th>
	<th>StockBookItemNo</th>
	<th>NameOfTheItem</th>
	<th>Qty</th>
	<th>Working</th>
	<th>Serviceable</th>
	<th>Missing</th>
	<th>Condemned</th>
	</tr>";
while($row=$result->fetch_assoc())
{
	echo "<tr>
	<td>".$row["Slno"]."</td>
	<td>".$row["stockBookItemNo"]."</td>
	<td>".$row["nameOfTheItem"]."</td>
	<td>".$row["qty"]."</td>
	<td>".$row["working"]."</td>
	<td>".$row["serviceable"]."</td>
	<td>".$row["missing"]."</td>
	<td>".$row["condemned"]."</td>
     </tr>";
	
	
	
}

}
else
{
	echo "0 results";
}
$conn->close();
?>
</center>
</body>
</html>