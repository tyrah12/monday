	<style>

* {
margin:0;
padding:0;
font-family: sans-serif;
}

.hero{
height: 100%;
width: 100%;
background-image: url(wee.png);
background-position: center;
background-size: cover;
position: absolute;
}

.form-box{
width: 380px;
height: 480px;
position: relative;
margin:6% auto;
padding: 5px;
overflow: hidden;
border-radius: 3%;
box-shadow: 0 0 20px 9px #ff9afd;

}

.button-box{
width: 220px;
margin:35px auto;
position: relative;
box-shadow: 0 0 20px 9px #ff61241f;
border-radius: 30px;
}



.toggle-btn{
padding:10px 30px;
cursor: pointer;
background: transparent;
border: 0;
outline: none;
position: relative;
}


#btn{
top: 0;
left: 0;
position: absolute;
width: 110px;
height: 100%;
background: linear-gradient(to right, #ff105f,#ff9afd,#ffad06);
border-radius: 30px;
transition: .5s;
}

::placeholder { 
  color: rgb(122, 255, 71);
}
  
  
.social-icons{
margin: 30px auto;
text-align: center;
}

.social-icons img{
width: 30px;
 margin: 0 12px;
 box-shadow: 0 0 20px 0 #7f7f7f3d;
 cursor: pointer;
 border-radius: 50%;
}

.input-group{
top: 180px;
position: absolute;
width: 280px;
transition: .5s;
}

.input-field{
width:100%;
padding: 10px 0;
margin:5px 0;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid #09f;
outline: none ;
background:transparent;
border-radius: 10px;
}

.input-field:hover{
width:100%;
padding: 10px 0;
margin:5px 0;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid #f4511e;
outline: none ;
background:transparent;
border-radius: 10px;
}


.submit-button{
width: 85%;
padding: 10px 30px;
cursor: pointer;
display: block;
margin: auto;
background: linear-gradient(to right, #ff105f,#ff9afd,#ffad06);
border: 0;
outline: none;
border-radius: 30px;
}

.check-box{
   margin: 30px 10px 30px 0;
}

span{
color: #777;
font-size: 12px;
bottom: 63px;
position: absolute;
}

#login{
left: 50px;
}

#register{
left: 450px;
}




</style>
<!DOCTYPE html>
<html>


	<body id="top">
    <div class="hero">
          <div class="form-box">
		         <div class="button-box">
				 <button type="button" class="toggle-btn">Log In</button>
				 
	<form name="index.php" action="login.php" method="POST">
	    <input type="text" name="id" class="input-field" placeholder="User Name" required>
		<input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
		<button type="submit" name="submit" class="submit-button">Log In</button>
	</form>
</div>
	</div>
	
	<script>
	
	var x = document.getElementById("login");
	var z = document.getElementById("btn");
	
	function login()
	{
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0";
	}
	
	
	</script>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
	$a=$_POST['id'];
	$b=$_POST['pass'];
	$select=("SELECT * FROM account where UserName='$a'and Password='$b'");
	$check=mysqli_query($con,$select);
	if ($check) {
		if (mysqli_num_rows($check)>0) {
			header("location:index.php");
		}
		elseif (!$check) {
			echo "<script> alert('u can't log in)</script>";
		}
		else{
			echo "incorrect UserName or Password !";
		}
	}
}
?>	