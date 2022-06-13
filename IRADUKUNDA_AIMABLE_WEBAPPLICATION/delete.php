<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	<style>
		body{
			background-color: violet;
		}
		input{
			width: 40%;
			height: 5%;
			border:1px;
			border-radius:05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</head>
<body>
	<CENTER>
		<H1>DELETE FROM ACCOUNT</H1>
		<form name="delete.php" action="delete.php" method="POST"><br>
			<input type="text" name="name" placeholder="USERNAME" required=""><br>
			<button type="submit" name="submit">DELETE</button>
		</form>
	</CENTER>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
	$a=$_POST['name'];
	$delete="DELETE FROM account WHERE UserName='$a'";
	$sql=mysqli_query($con,$delete);
	if ($sql) {
		echo "data deleted";
	}
	else{
		echo "Mysql error";
	}
}




?>
