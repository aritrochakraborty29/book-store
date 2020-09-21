<?php
	session_start();
	include("dbcorn.php");
	if(isset($_GET) && !empty($_GET))
	{
		$bid = $_GET['bid'];
		$sql = "SELECT * FROM books WHERE bid=$bid";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$_SESSION['book'][$bid] = $row;
		echo "<pre>"; print_r($_SESSION['book']);exit;
		header("location:index.php");
	}
?>