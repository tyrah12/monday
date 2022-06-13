<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<style>
body{
	background-color:violet;
}
input{
	width:40%;
	height:5%;
	border:1px;
	border-radius:05px;
	padding:8px 15px 8px 15px;
	margin:10px 0px 15px 0px;
	box-shadow:1px 1px 2px 1px grey;
}
</style>
</head>
<body>

	<center>
		<h1>INSERT INTO ACCOUNT </H1>
					
<form name="login.php" action="index.php" method="POST"><br>
	<input type="text" name="name" placeholder="USER_NAME" required=""><br>
	<input type="password" name="pass" placeholder="PASSWORD" required=""><br>
	<button type="submit" name="submit" class="submit-button">INSERT</button>
</form>
</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$insert=("INSERT INTO account(UserName,Password) values('$name','$pass')");
	$query=mysqli_query($con,$insert);
	if ($query) {
		echo "<script> alert('data inserted')</script>";
	}
		else{
			echo " !";
		}
	
}
?>			
