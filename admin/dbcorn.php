<?php
	
	$server = "localhost";
	$user= "root";
	$password= "";
	$db  = "online_book_store";

	$conn= new mysqli($server,$user,$password,$db);
	if($conn->connect_error)
		die("connnection fsiled:".$conn->connect_error);
	echo "connected with databae";
	?>