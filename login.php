<?php
session_start();
include("dbcon.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$ret=mysqli_query($conn,"select * from user where username='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
	
	$_SESSION['login']=$_POST['username'];
	$_SESSION['id']=$num['id'];	
	header("location:spcourses.php");
exit();
}
else
{
	echo "<script>alert('Login Failed');</script>";
exit();
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-box">
		<h4>Login Here</h4>
		<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
		<form method="post">
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Enter Username">
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Enter Password">
			<input  type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>
