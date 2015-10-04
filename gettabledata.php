<html>
	<head>
	<style>
	input{
		height:30px;
		font-size:20px;
	}
	form{
		margin-left:150px;
		margin-top:40px;
		position:fixed;
		font-size:25px;
	}
	</style>
		</head>
	<body>
		<center><h1>We are listening, enter the details</h1></center>
		<img src="ear.jpg" align="right" style="margin-top:120px;margin-right:-10px;">
		<form action="createrow.php" method="post">
			1) Stock Book Item No :<input type="text" name="stockno"><br><br>
			2) Name of the Item :<input type="text" name="name"><br><br>
			3) Quantity :<input type="text" name="qty"><br><br>
			4) Working :<input type="text" name="working"><br><br>
			5) Serviceable :<input type="text" name="service"><br><br>
			6) Missing :<input type="text" name="missing"><br><br>
			7) Condemned :<input type="text" name="condemned"><br><br>
			Table Name:<input type="text" name="tname"><br><br>
			DataBase Name:<input type="text" name="dname"><br><br>
			<input type="submit" value="Create Row" style="margin-left:50px;border:none;background-color:royalblue;color:white;font-size:25px;height:40px;">
			</form>
		</body>
</html>