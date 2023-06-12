<?php
include_once('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);


	$query=mysqli_query($conn,"insert into user(name,username,email,password) values('$name','$username','$email','$password')");
	if($query)
	{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:login.php');
	}

}
?>




<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.confirm-password.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.confirm-password.focus();
return false;
}
windows.location="<a href="login.php">
return true;
}
</script>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="signup-box">
		<h5>Create an Account</h5>
		<form name="registration" id="registration"  method="post" onSubmit="return valid();">
		    <label for="name">Name</label>
			<input type="text" width="100%" name="name" placeholder="Enter Name">
		    <label for="username">Username</label>
			<input type="text" name="username" placeholder="Enter Username">
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Enter Email">
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Enter Password">
			<label for="confirm-password">Confirm Password</label>
			<input type="password" name="confirm-password" placeholder="Confirm Password">
			<input type="submit" id="submit" name="submit" value="Signup">
			<p>Already have an account? <a href="login.php">Login Here</a></p>
		</form>
	</div>
</body>
</html>
