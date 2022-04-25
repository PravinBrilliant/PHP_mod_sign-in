<?php  $db=mysqli_connect("localhost","root","","sign");
session_start();
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$cpass=$_POST['pass'];
	$dup=mysqli_query($db,"Select * from user where email='".$email."' AND pass='".$cpass."'limit 1");

	if(mysqli_num_rows($dup)>0)
	{
		$_SESSION["email"]=$email;
		echo '<script>alert("Loggin succesfully");window.location.href="welcome.php";</script>';
	}else{
		echo '<script>alert("Loggin failed");window.location.href="login.php ";</script>';}
}
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body style="justify-content: center;
	display: flex;
	height: 100%;
	background-image:url(im.jpg);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
	
		<div class="cardc">
		<form method="post">
			<h2 style="margin-top: 35px; text-decoration: underline; font-weight: bold;">Login Form</h2>
			<img src="logo.png" style="border-radius: 50%; width: 80px;"> <br>
  

			<label style="font-weight: Bold; color: Black; ">Email :<br>
				<input type="text" name="email" placeholder="Enter your email" autocomplete="none" style="border-radius: 10px;height: 40px; width: 270px;" required></label><br><br>
				<label style="font-weight: Bold;">Password :<br>
				<input type="password" name="pass" placeholder="Enter your password" autocomplete="off" required style="border-radius: 10px;height: 40px;width: 270px; "></label><br><br>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="border-radius: 10px 1px 10px 1px; width: 170px;"><br>
		<a href="register.php" style="align-content: left; color: blue;font-weight: bold;">New registration?</a> |
		<a href="forget.php" style=" align-content: left; color: blue;font-weight: bold;">Forgot Password?</a>
		</form></div>



</body>
</html>
