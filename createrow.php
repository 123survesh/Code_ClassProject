<html>
<body>
<?php
$server="localhost";
$username="root";
$password="";
$dname=$_POST["dname"];
$tname=$_POST["tname"];
$conn = new mysqli($server,$username,$password,$dname);
$sql = "INSERT INTO ".$tname." (stockBookItemNo,nameOfTheItem,qty,working,serviceable,missing,condemned)
VALUES ('".$_POST['stockno']."','".$_POST["name"]."',".$_POST["qty"].",".$_POST["working"].",".$_POST["service"].",".$_POST["missing"].",".$_POST["condemned"].")";
if ($conn->query($sql) === TRUE) {
    echo "<h2>New record created successfully</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?><center>
     <img src="tele.jpg">
 <br><br><h2>want to view the table you created?</h2>
<form action="viewdata.php" method="post">
<input type="submit" value="view table content" style="border:none;background-color:royalblue;color:white;font-size:20px;height:30px;">
</form></center>
</body>
</html>