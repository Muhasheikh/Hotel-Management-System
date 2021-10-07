<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname="hotel reservation system";


// Create connection
$conn = new mysqli($servername, $username, $password,$DBname);
// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected successfully";
	}
?>
