<?php
	$conn = new mysqli('localhost', 'root', '', 'sukanya');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	