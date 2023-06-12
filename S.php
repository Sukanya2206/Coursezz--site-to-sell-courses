<?php

$username = $_POST['username']
$email = $_POST['email']
$Password = $_POST['password']
$dBName = "sukanya";


// database connection
$conn = new mysqli('localhost', 'root',' ','test');

if(!$conn->connect_error)
{
	die('Database Connection Failed : ', $conn->connect_error);
}
else
{
   $stmt =$conn->prepare("insert into registration(username, email, password)values(?,?,?)");
   $stmt->bind_param("sss",$username, $email, $password);
   $stmt->execute();
   echo "registration succesfully....";
   $stmt->close();
   $conn->close();
}
?>