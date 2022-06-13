<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<style>
		body{
			background-color: violet;
		}
		input{
			width: 40%;
			height: 5%;
			border:1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin:10px 0px 15px;
			box-shadow: 1px 1px 2px 1px grey;

		}
	</style>
</head>
<body>
	<center>
		<h1>UPDATE FROM ACCOUNT </H1>
					
<form name="update.php" action="update.php" method="POST"><br>
	<input type="text" name="name" placeholder="USER_NAME" required=""><br>
	<button type="submit" name="submit" class="submit-button">INSERT</button>
</form>
</center>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
	$a=$_POST['name'];
	$update="UPDATE account SET UserName WHERE UserName='$a' ";
	$sql=mysqli_query($con,$update);
	if ($sql) {
		echo "updated";
	}
	else{
		echo "not updated";
	}
}
?>