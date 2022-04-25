<?php $db=mysqli_connect("localhost","root","","sign");

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['rpassword'];
	$cpass=$_POST['rcpassword'];
		$dup=mysqli_query($db,"Select * from user where email='$email'");

	if(mysqli_num_rows($dup)>0)
	{
		echo '<script>alert("Email already registered")</script>';
	}else{
		$dup=mysqli_query($db,"Select * from user where mobile='$mobile'");

	if(mysqli_num_rows($dup)>0)
	{
		echo '<script>alert("Phone no already registered")</script>';
	}else{
	
	if ($_POST['rpassword'] !== $_POST['rcpassword'])
	 {
   echo '<script>alert("Password is does not match");window.location.href="register.php"</script>';  
}else{


	
	$insert="Insert into user values(null,'$name','$email','$mobile','$pass','$cpass')";
	if(mysqli_query($db,$insert))
	{
		echo'<script>alert("Registered Succesfully");window.location.href="login.php"</script>';
	}
	else{
		echo'<script>alert("Registered Failed")</script>';
	}}
}}}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- 	<script>
        function validate(){

            var a = document.getElementById("rpassword").value;
            var b = document.getElementById("rcpassword").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script> -->
</head>
<body style="background-image: url(img.jpg); -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"><div class="cardd">
	<form method="post">
		<h2 style="margin-top: 30px; font-weight: bolder; text-decoration: underline;">Registration form</h2><br><br>
		<label style="font-weight: Bold; color: black; padding-right: 5px; ">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="border-radius: 10px;" type="text" name="name" required></label><br><br>
			<label style="font-weight: Bold; color: black; padding-right: 35px ">Mobile no :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="border-radius: 10px;" type="tel" pattern="[6789][0-9]{9}"  name="mobile"></label><br><br>
				<label style="font-weight: Bold; color: black; ">E-mail :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="border-radius: 10px; padding-right: 10px" type="email" name="email" required></label><br><br>
				<label style="font-weight: Bold; color: black; padding-right: 25px">Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="border-radius: 10px; " type="Password" name="rpassword" required></label><br><br>
				<label style="font-weight: Bold; color: black;padding-right: 45px ">Confirm Password :
				<input style="border-radius: 10px;" type="Password" name="rcpassword" required></label><br><br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary"><br>	<a href="login.php" style="font-weight:bold; color: blue;">Already registered?</a>


	</form></div> 

</body>
</html>
