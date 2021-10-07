<?php

	$servername = "localhost";
	$userName = "root";
	$pwd = "" ;
	$db = "hotel reservation system";
	//create connection 	
	$conn =  mysqli_connect($servername,$userName,$pwd,$db);
	
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected successfully. <br>" ; 
	}


?>